<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SaccosContributionAmaountHistory extends Model
{
    protected $fillable =[

        'member_id','amount', 'start_date', 'end_date'
    ];
    public function member()
    {
        return $this->belongsTo('App\SaccosMember');

    }
    public function contribution()
    {
        return $this->belongsTo('App\SaccosContribution');
    }
}
