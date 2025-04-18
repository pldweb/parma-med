<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        $params = ['categories' => $categories];
        return view('admin.categories.index', $params);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'icon' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        DB::beginTransaction();

        try {
            // Pengecekan apakah ada icon yang diinput
            if ($request->hasFile('icon')) {
                // File input yang langsung di upload ke folder public dengan nama category_icons
                $iconPath = $request->file('icon')->store('category_icons', 'public');
                $validated['icon'] = $iconPath;
            }

            $validated['slug'] = Str::slug($validated['name']);

            $newCategory = Category::create($validated);

            DB::commit(); // Simpan transaksi jika berhasil
            return redirect()->route('admin.categories.index');

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
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        $params = ['category' => $category];
        return view('admin.categories.edit', $params);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $validated = $request->validate([
            'name' => 'sometimes|string|max:255',
            'icon' => 'sometimes|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        DB::beginTransaction();

        try {
            // Pengecekan apakah ada icon yang diinput
            if ($request->hasFile('icon')) {
                // File input yang langsung di upload ke folder public dengan nama category_icons
                $iconPath = $request->file('icon')->store('category_icons', 'public');
                $validated['icon'] = $iconPath;
            }

            $validated['slug'] = Str::slug($validated['name']);

            $category->update($validated);

            DB::commit(); // Simpan transaksi jika berhasil
            return redirect()->route('admin.categories.index');

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
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        try {
            $category->delete();
            return redirect()->route('admin.categories.index');
        }catch (\Exception $th) {
            DB::rollBack();
            $error = ValidationException::withMessages([
                'system_error' => ['System error' . $th->getMessage()],
            ]);
            throw $error;
        }
    }
}
