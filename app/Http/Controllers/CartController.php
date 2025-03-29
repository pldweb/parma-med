<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Wavey\Sweetalert\Sweetalert;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('front.carts');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store($productId)
    {
        $user = Auth::user();
        $existingCart = Cart::where('user_id', $user->id)->where('product_id', $productId)->first();
        if ($existingCart) {
            return redirect()->route('carts.index');
        }

        DB::beginTransaction();
        try {
            $cart = Cart::updateOrCreate([
                'user_id' => $user->id,
                'product_id' => $productId,
            ]);
            $cart->save();
            DB::commit();
            return response()->json([
                'success' => true,
                'icon' => 'success',
                'message' => 'Product added to cart'
            ]);

        } catch (\Exception $exception) {
            DB::rollBack();
            return response()->json([
                'success' => false,
                'icon' => 'error',
                'message' => 'Product gagal ditambahkan ke keranjang' . $exception->getMessage()
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cart $cart)
    {
        //
    }
}
