<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class supplier extends Model
{
    use HasFactory;

    const SUPPLY_DIRECT = 1;
    const SUPPLY_STORE  = 2;
    protected $fillable =[
        'date',
        's_name',
        'type',
        'mobile',
        'phone',
        'email',
    ];

    public function pays()
    {
        return $this->hasMany(Pay::class,'s_id');
    }
}
