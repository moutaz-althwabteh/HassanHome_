<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_name',
        'project_num',
        'Project_gps',
        'Project_owner',
        'Project_mfawd',
        'bulding_mfaud_id',
        'bulding_mfaud_address',
        'bulding_part',
        'project_flw',
        'project_emp',
        'project_type',
        'project_status',
        'project_sdate',
        'project_edate',
        'project_budget',
        'project_budget_curr',
        'project_contract',
        'project_notes',
    ];

    public function project()
    {
        return $this->hasMany('App\Models\Flat', 'project_id' );
    }
 
}



