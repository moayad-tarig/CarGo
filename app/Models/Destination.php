<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;
    protected $fillable = [
        'items',
        'order_id',
        'client_id',
        'area',
        'name',
        'phone_number',
        'size',
        'quantity',
    ];
    public function order()
    {
        return $this->belongsToMany(Order::class, 'order_id');
    }
}
