<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SaccosMember extends Model
{
    protected $fillable =[
        'member_first_name',
        'member_middle_name',
        'member_surname',
        'town',
        'residence',
        'occupation',
        'email',
        'country',
        'nationality',
        'mobile_number',
        'date_of_registration',
        'passport_image',
        'department_id',
        'organization_id'
            ];
}
