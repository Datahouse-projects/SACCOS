<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SaccosShareContributionHistory extends Model
{
    protected $fillable =[
        'member_id',
        'contribution_id',
        'contribution_start_date',
        'contribution_end_date'
    ];
}
