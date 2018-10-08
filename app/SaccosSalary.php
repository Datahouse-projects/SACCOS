<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SaccosSalary extends Model
{
    protected $fillable =[
            'member_id',
            'member_name',
            'amount'
    ];
}
