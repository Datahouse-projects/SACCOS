<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SaccosSalary extends Model
{
    protected $fillable =[
            'member_id',
            'member_full_name',
            'amount'
    ];
    public function member()
    {
        return $this->hasOne('App\SaccosMember');
    }
}
