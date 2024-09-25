<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    public function Role(){
        return $this->belongsTo('App\Models\Role');
    }
    public function User_register(){
        return $this->belongsTo('App\Models\User_register');
    }
}
