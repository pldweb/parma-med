<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        $params = ['products' => $products];
        return view('admin.products.index', $params);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $params = ['categories' => $categories];
        return view('admin.products.create', $params);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|integer',
            'price' => 'required|integer',
            'about' => 'required|string',
            'photo' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        DB::beginTransaction();

        try {
            // Pengecekan apakah ada photo yang diinput
            if ($request->hasFile('photo')) {
                // File input yang langsung di upload ke folder public dengan nama product_photos
                $photoPath = $request->file('photo')->store('product_photos', 'public');
                $validated['photo'] = $photoPath;
            }

            $validated['slug'] = Str::slug($validated['name']);
            $newCategory = Product::create($validated);

            DB::commit(); // Simpan transaksi jika berhasil
            return redirect()->route('admin.products.index');

        } catch (\Exception $th) {
            // Batalkan transaksi
            DB::rollBack();
            $error = ValidationException::withMessages([
                'system_error' => ['System error' . $th->getMessage()],
            ]);
            throw $error;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            Product::where('id', $id)->delete();
            return response()->json([
                'success' => true,
                'message' => 'Product deleted successfully!'
            ]);
        }catch (\Exception $th) {
            DB::rollBack();
            return response()->json([
                'success' => false,
                'message' => $th->getMessage()
            ]);
        }
    }
}
