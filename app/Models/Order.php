<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'product_name',
        'quantity',
        'buyer_name',
        'address',
        'postal_code',
        'subtotal',
        'vat',
        'discount',
        'total',
        'order_date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}