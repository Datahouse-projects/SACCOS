<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SaccosShareAmaountHistory extends Model
{
 protected $fillable =[

      'member_id','amount', 'start_date', 'end_date'
     ];
    public function shares()
    {
        return $this->hasMany('App\SaccosShare(');
    }

}
