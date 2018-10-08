<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SaccosOrganization extends Model
{
    protected $fillable =[
        'organization_name','location','functionality','logo'

    ];
    public function departments(){
        return $this->hasMany('App\SaccosDepartment');
    }
}
