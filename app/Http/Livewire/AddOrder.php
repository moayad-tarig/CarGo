<?php

namespace App\Http\Livewire;

use App\Models\Destination;
use App\Models\Item;
use App\Models\Order;
use GuzzleHttp\Psr7\Request;
use Livewire\Component;

class AddOrder extends Component
{
    public $inputs = [''];
    public $inputsItems = [''];
    public $inputsDestionations = [''];
    public $items = [];
    public $oneOrder = [];

    public $i = 0;
    public $b = 0;
    public $c = 0;
    public $order = []; // for first section
    public $item = []; // for secound section
    public $destination = []; // for third section

    public function MoreInputs()
    {
        $this->i = $this->i + 1;
        return  array_push($this->inputs, $this->i);
    }
    public function submitForm()
    {

        foreach ($this->order['status'] as $index => $order) {


            $this->oneOrder = Order::create([
                'order_code' => $this->order['order_code'][$index],
                'client_id' => '1',
                'sender_name' => $this->order['senderName'][$index],
                'sender_number' => $this->order['number'][$index],
                'order_status' => $order
            ]);
        }

        foreach ($this->items as $index => $item) {
            Item::create([
                'client_id' => '1',
                'order_id' => $this->oneOrder->id,
                'name' => $item,
                'weight' => $this->item['weight'][$index],
                'material' => $this->item['material'][$index],
                'note' => $this->item['note'][$index],
            ]);
        }
        foreach ($this->destination['area'] as $index => $item) {
            Destination::create([
                'items' => $this->items[$index],
                'order_id' => $this->oneOrder->id,
                'client_id' => "1",
                'area' => $item,
                'name' => $this->destination['name'][$index],
                'phone_number' => $this->destination['phone_number'][$index],
                'size' => $this->destination['size'][$index],
                'quantity' => $this->destination['quantity'][$index],
            ]);
        }
    }

    public function MoreInputsItems()
    {
        $this->b = $this->b + 1;
        return  array_push($this->inputsItems, $this->b);
    }

    public function MoreInputsDestination()
    {
        $this->c = $this->c + 1;
        return  array_push($this->inputsDestionations, $this->c);
    }
    public function DeleteInput()
    {
        array_shift($this->inputs);
    }
    public function render()
    {
        return view('livewire.add-order', [
            'inputs[]' => $this->inputs,
            'inputsItems' => $this->inputsItems,
            'inputsDestinations' => $this->inputsDestionations,
            'items' => $this->items,
        ]);
    }
}
