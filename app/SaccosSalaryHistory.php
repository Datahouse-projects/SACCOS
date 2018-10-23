<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SaccosSalaryHistory extends Model
{
    protected $fillable =[
        'member_id',
        'salary_id',
        'salary_amount_start_date',
        'salary_amount_end_date'
    ];
    public function members()
    {
        return $this->hasMany('App\SaccosMember');
    }
    public function salaries()
    {
        return $this->hasMany('App\SaccosSalary');
    }
}
