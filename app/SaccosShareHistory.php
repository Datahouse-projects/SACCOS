<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SaccosShareHistory extends Model
{
    protected $fillable =[
        'share_id',
        'started_date',
        'end_date'
    ];
    public function share()
    {
        return $this->belongsTo('App\SaccosShare');
    }
}
