<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oorder extends Model
{
    use HasFactory;
    const STATUS_PENDING = 0;
    const STATUS_ACTIVE  = 1;
    const STATUS_CANCEL  = 2;
    const STATUS_REFUND  = 3;
     protected $fillable =[
        'voucher_date',
        'voucher_num',
        'voucher_type',
        'voucher_value',
        'voucher_place',
        'voucher_desc',
        'project_id',
        'supplier_id',
     ];

     public function project()
     {
      return $this->belongsTo(Project::class,'project_id');
     }
}
