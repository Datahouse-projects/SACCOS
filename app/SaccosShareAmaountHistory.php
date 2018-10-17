<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SaccosShareAmaountHistory extends Model
{
 protected $fillable =[

      'member_id','amount', 'start_date', 'end_date'
     ];


}
