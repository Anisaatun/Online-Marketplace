<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Order;
use App\Models\ShoppingCart;
use Illuminate\Support\Facades\Auth;

class CheckoutComponent extends Component
{
    public $cartItems = [];
    public $subtotal;
    public $vat;
    public $discount = 5000; // Anda bisa menyesuaikan diskon ini jika diperlukan
    public $total;
    public $buyer_name;
    public $address;
    public $postal_code;

    public function mount()
    {
        $this->cartItems = $this->getCartItems();
        $this->calculateTotals(); // Panggil metode untuk menghitung total
    }

    public function getCartItems()
    {
        return ShoppingCart::with('product')->where('user_id', Auth::id())->get();
    }

    public function calculateTotals()
    {
        // Hitung subtotal
        $this->subtotal = $this->cartItems->sum(function($item) {
            return $item->quantity * $item->product->price;
        });

        // Hitung VAT (misalnya 10%)
        $this->vat = $this->subtotal * 0.1;

        // Hitung total
        $this->total = $this->subtotal + $this->vat - $this->discount;
    }

    public function placeOrder()
    {
        foreach ($this->cartItems as $item) {
            Order::create([
                'user_id' => Auth::id(),
                'product_name' => $item->product->name,
                'quantity' => $item->quantity,
                'buyer_name' => $this->buyer_name,
                'address' => $this->address,
                'postal_code' => $this->postal_code,
                'subtotal' => $this->subtotal,
                'vat' => $this->vat,
                'discount' => $this->discount,
                'total' => $this->total,
            ]);
        }

        // Clear the shopping cart after placing the order
        ShoppingCart::where('user_id', Auth::id())->delete();

        session()->flash('message', 'Order placed successfully!');
        return redirect()->to('/');
    }

    public function render()
    {
        return view('livewire.checkout-component', [
            'cartItems' => $this->cartItems,
            'subtotal' => $this->subtotal,
            'vat' => $this->vat,
            'discount' => $this->discount,
            'total' => $this->total,
        ])->layout('layouts.guest');
    }
}