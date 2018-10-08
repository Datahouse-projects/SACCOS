<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SaccosPayment extends Model
{
    protected $fillable =[
            'loan_id',
            'date',
            'payment_type',
            'posted_status',
            'received_by'
    ];
}
