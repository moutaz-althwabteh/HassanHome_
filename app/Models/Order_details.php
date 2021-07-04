<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_details extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_id',
        'title',
        'type',
        'quantity',
        'price',
        'total',
    ];

    public function order()
    {
        return $this->belongsTo('App\Oorder', 'order_id' );
    }

}
