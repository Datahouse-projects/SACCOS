<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SaccosDepartment extends Model
{
    protected $fillable =[
        'department_name',
        'organization_id'
    ];
    public function organization(){
        return $this->belongsTo('App\SaccosOrganization');
    }
}
