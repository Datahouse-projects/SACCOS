<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SaccosContributionHistory extends Model
{
    protected $fillable =[
        'contribution_id',
        'member_id',
        'member_full_name',
        'contribution_start_date',
        'contribution_end_date'
    ];
    //
}
