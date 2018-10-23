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


    public function department()
    {
        return $this->belongsTo('App\SaccosDepartment');
    }

    public function contribution(){
        return $this->belongsTo('App\SaccosContribution');
    }
    public function dividends()
    {
        return $this->hasMany('App\SaccosDividend');
    }

    public function contributions()
    {
        return $this->hasMany('App\SaccosContribution');

    }
    public function share()
    {
        return $this->hasMany('App\SaccosShare');

    }
    public function loan()
    {
        return $this->hasOne('App\SaccosLoan');

    }
    public function salary()
    {
        return $this->belongsTo('App\SaccosSalary');

    }
    public function contribution_history()
    {
        return $this->belongsTo('App\SaccosContributionHistory(');
    }
    public function contribution_amount_histories()
    {
        return $this->hasMany('App\SaccosContributionAmountHistory');

    }
}
