<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diary extends Model
{
    public function Followup(){
        return $this->hasMany('\App\Models\Followup');
    }
    use HasFactory;
}
