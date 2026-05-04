<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    // tampilkan cart
    public function index()
    {
        $cartItems = Cart::with('product')
            ->where('user_id', Auth::id())
            ->get();

        return view('cart.index', compact('cartItems'));
    }

    // tambah ke cart (simple)
    public function add($id)
    {
        $item = Cart::where('user_id', Auth::id())
            ->where('product_id', $id)
            ->first();

        if ($item) {
            // kalau sudah ada → tambah quantity
            $item->increment('quantity');
        } else {
            // kalau belum ada → buat baru
            Cart::create([
                'user_id' => Auth::id(),
                'product_id' => $id,
                'quantity' => 1
            ]);
        }

        return redirect('/cart');
    }
    // tambah quantity
public function increase($id)
{
    $item = Cart::where('id', $id)
        ->where('user_id', Auth::id())
        ->firstOrFail();

    $item->increment('quantity');

    return back();
}

// kurangi quantity
public function decrease($id)
{
    $item = Cart::where('id', $id)
        ->where('user_id', Auth::id())
        ->firstOrFail();

    if ($item->quantity > 1) {
        $item->decrement('quantity');
    } else {
        $item->delete();
    }

    return back();
}

public function remove($id)
{
    $item = Cart::where('id', $id)
        ->where('user_id', Auth::id())
        ->firstOrFail();

    $item->delete();

    return back();
}

public function checkout()
{
    $cartItems = Cart::with('product')
        ->where('user_id', Auth::id())
        ->get();

    if ($cartItems->isEmpty()) {
        return back()->with('error', 'Cart kosong');
    }

    $total = 0;

    foreach ($cartItems as $item) {
        $total += ($item->product->price ?? 0) * $item->quantity;
    }

    Order::create([
        'user_id' => Auth::id(),
        'total' => $total
    ]);

    // kosongkan cart
    Cart::where('user_id', Auth::id())->delete();

    return redirect('/cart')->with('success', 'Checkout berhasil!');
}
}