<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SaccosLoan extends Model
{
    protected $fillable =[
        'member_id',
        'organization_id',
        'loans_category_id',
        'member_name',
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
        'muximum amount'
    ];
}
