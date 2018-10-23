<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SaccosLoan extends Model
{
    protected $fillable =[
        'member_id',
        'organization_id',
        'loans_category_id',
        'member_full_name',
        'created_date',
        'duration',
        'issued_date',
        'end_date',
        'interest_per_day',
        'total_interest',
        'total_amount',
        'payment_principal',
        'payment_interest',
        'loan_status',
        'muximum_amount'
    ];


    public function loan_categories(){
        return $this->hasMany('App\SaccosLoanCategory');
    }

    public function member(){
        return $this->belongsTo('App\SaccosMember');
    }
    public function members(){
        return $this->belongsTo('App\SaccosMember');
    }

    public function organization(){
        return $this->belongsTo('App\SaccosOrganization');
    }
    public function payments()
    {
        return $this->hasMany('App\SaccosPayment');
    }
}
