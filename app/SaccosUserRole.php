<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SaccosUserRole extends Model
{
    protected $fillable = [
        'role'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
