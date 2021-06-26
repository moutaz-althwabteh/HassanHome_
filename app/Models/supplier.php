<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class supplier extends Model
{
    use HasFactory;

    protected $fillable =[
        'date',
        's_name',
        'type',
        'mobile',
        'phone',
        'email',
    ];
}
