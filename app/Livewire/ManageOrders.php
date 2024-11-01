<?php

namespace App\Livewire;

use App\Models\Order;
use Livewire\Component;

class ManageOrders extends Component
{
    public $orders;
    public $currentUrl;

    public function mount()
    {
        $this->orders = Order::all();
    }

    public function deleteOrder($orderId)
    {
    $order = Order::find($orderId);
    if ($order) {
        $order->delete();
        // Refresh the orders list
        $this->orders = Order::all();
        session()->flash('message', 'Order deleted successfully.');
    } else {
        session()->flash('error', 'Order not found.');
    }
    }

    public function render()
    {
        return view('livewire.manage-orders')->layout('admin-layout')->title('E-commerce | Manage Order');
    }
}
