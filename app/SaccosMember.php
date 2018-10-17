<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SaccosMember extends Model
{
    protected $fillable =[
        'member_full_name', 'town', 'residence',
        'occupation', 'email', 'country', 'nationality', 'mobile_number', 'date_of_registration', 'passport_image',
        'department_id', 'organization_id'
            ];


    public function departments(){
        return $this->belongsTo('App\SaccosDepartment');
    }

    public function contributions(){
        return $this->belongsTo('App\SaccosDepartment');
    }
}
