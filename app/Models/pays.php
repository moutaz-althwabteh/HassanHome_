<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pays extends Model
{
    use HasFactory;

    protected $fillable = [
's_id',
'date',
'payment_receipt',
'payment_type',
'total',
'carr_type',
'payment_status',
'check_date',
'cashier',
'notes',
    ];

        public function suppliers()
        {
            return $this->belongsTo('App\supplier', 's_id')
        
    }
}
