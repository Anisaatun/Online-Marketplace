<?php

namespace App\Livewire;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\ShoppingCart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Checkout extends Component
{
    public function checkout()
    {
        $cartItems = ShoppingCart::where('user_id', Auth::id())->get();

        if ($cartItems->isEmpty()) {
            return redirect()->back()->with('error', 'Keranjang Anda kosong!');
        }

        // Hitung total dari keranjang
        $total = $cartItems->sum(function($item) {
            return $item->quantity * $item->product->price;
        });

        // Buat order
        $order = Order::create([
            'user_id' => Auth::id(),
            'total' => $total,
            'status' => 'pending',
        ]);

        // Simpan setiap item ke dalam order_items
        //foreach ($cartItems as $item) {
          //  OrderItem::create([
            //    'order_id' => $order->id,
              //  'product_id' => $item->product_id,
                //'quantity' => $item->quantity,
                //'price' => $item->product->price,
            //]);
        //}

        // Hapus item dari keranjang setelah checkout
        ShoppingCart::where('user_id', Auth::id())->delete();

        return view('livewire.checkout', compact('cartItems', 'total'))
        ->with('success', 'Pesanan berhasil dibuat!');
    }
}
