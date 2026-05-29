<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MemberShip extends Model
{
    //relacao com user
    public function user(){
        return $this->belongTo(User:class);
    }
    //relacao com team
    public function team(){
        return $this->belongsTo(Team::class);
    }
}
