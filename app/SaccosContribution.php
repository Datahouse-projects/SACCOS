<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SaccosContribution extends Model
{
    protected $fillable =[
        'contribution_name', 'member_id', 'organization_id', 'contribution_amount', 'contribution_started_date',
        'contribution_end_date'

    ];

    public function organizations()
    {
        return $this->hasMany('App\SaccosOrganization');

    }
    public function members()
    {
        return $this->hasMany('App\SaccosMember');
    }
    public function member()
    {
        return $this->belongsTo('App\SaccosMember');
    }
    public function organization()
    {
        return $this->belongsTo('App\SaccosOrganization');
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
