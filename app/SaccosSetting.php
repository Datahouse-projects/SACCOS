<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SaccosSetting extends Model
{
    protected $fillable =[
        'salary_id',
        'reduced_from_salary',
        'parameter_name',
        'value'
    ];
}
