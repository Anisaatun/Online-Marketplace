<?php

namespace App\Livewire;

use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class OrderList extends Component
{
    public $orders;

    public function mount()
    {
        // Mengambil pesanan dari database yang dimiliki oleh pengguna yang sedang login
        $this->orders = Order::where('user_id', Auth::id())->get(); 
    }
    
    public function render()
    {
        return view('livewire.order-list')->title('E-commerce | Order List');
    }
}
