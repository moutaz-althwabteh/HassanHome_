<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flat extends Model
{
    use HasFactory;

    

protected $fillable = [
    'project_id',
    'flat_num',
    'flat_place',
    'flat_side',
    'flat_status',
    'money_price',
    'flat_price',
    'flat_contract',
    'flat_owner',
    'flat_owner_address',
    'flat_owner_job',
    'flat_owner_job_desc',
    'flat_owner_mobile',
    'flat_owner_id',
    'flat_price_nis',
    'flat_contract_date',
    'kafel1',
    'kafel1_id',
    'kafel1_address',
    'kafel2',
    'kafel2_id',
    'kafel2_address',
    'flat_area',
    'meter_price',
    'first_payment',
    'first_payment_done',
    'instalment_amonut',
    'instalment_value',
    'total_price',
    'monthly_installment',
    'total_pays',
    'no_monthes',
    'no_years',
    'monthly_profit_rate',
    'profit_rate',
    'profit_value',
    'installment_sdate',
    'installment_edate',
    'flat_shahed',
    'draft_img',
    'draft_daman',
    'contract_status',
    'cash_status',
    'rent_contract_status',
   ];

   
   public function project()
   {
       return $this->belongsTo('App\project', 'project_id' );
   }
}
