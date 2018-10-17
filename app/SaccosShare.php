<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SaccosShare extends Model
{
    protected $fillable =[
        'amount_of_share',
        'member_id',
        'date_opened',
        'date_closed'
    ];
}
