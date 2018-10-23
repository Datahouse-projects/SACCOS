<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SaccosLoanCategory extends Model
{
    protected $fillable =[
                'fine_rate',
                'loan_amount',
                'duration_minimum',
                'duration_maximum'
    ];


    public function loan(){
        return $this->belongsTo('App\SaccosLoan');
    }
}
