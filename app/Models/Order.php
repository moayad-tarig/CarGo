<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
            'order_code',
            'client_id',
            'sender_name',
            'sender_number',
            'order_status',
    ];

    public function destination()
    {
        return $this->hasMany(Destination::class);
    }
   
    public function item()
    {
        return $this->hasMany(Item::class);
    }
}
