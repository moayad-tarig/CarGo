<?php

namespace App\Http\Livewire;

use App\Models\Destination;
use App\Models\Item;
use App\Models\Order;
use Livewire\Component;

class ShowOrder extends Component
{
    public $orders = [];
    public function render()
    {
        
        $this->orders = Order::with(['destination', 'item'])->get();
        return view('livewire.show-order', [
            'orders' => $this->orders,
        ]);
    }
}
