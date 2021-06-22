<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oorder extends Model
{
    use HasFactory;
     protected $fillable =[
        'voucher_date',
        'voucher_num',
        'voucher_type',
        'voucher_value',
        'project_title',
        'voucher_place',
        'voucher_desc',
        'supplier_name',
     ];
}
