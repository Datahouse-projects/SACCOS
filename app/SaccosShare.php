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

    public function member()
    {
        return $this->belongsTo('App\SaccosMember');
    }
    public function share_histories()
    {
        return $this->hasMany('App\SaccosShareHistory');
    }
    public function dividends()
    {
        return $this->hasMany('App\SaccosDividend');

    }
    public function share_amount_history()
    {
        return $this->belongsTo('App\SaccosShareAmountHistory(');
    }

}
