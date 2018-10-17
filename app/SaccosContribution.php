<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SaccosContribution extends Model
{
    protected $fillable =[
        'contribution_name', 'member_id', 'organization_id', 'contribution_amount', 'contribution_started_date',
        'contribution_end_date'

    ];

    public function members()
    {
        return $this->has('App\SaccosMember');

    }
    public function organization(){
        return $this->hasMany('App\SaccosOrganization');
}
