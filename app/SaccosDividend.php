<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SaccosDividend extends Model
{
    protected $fillable =[
        'member_id',
        'share_id',
        'dividend_based_in_share',

    ];
}
