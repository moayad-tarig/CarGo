<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $fillable = [
            'client_id',
            'order_id',
            'name',
            'weight',
            'material',
            'note',
    ];
    public function Order()
    {
        return $this->belongsToMany(Order::class, 'order_id');
    }
}
