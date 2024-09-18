<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Followup extends Model
{
    public function Diary(){
        return $this->belongsTo('App\Models\Diary');
    }
    use HasFactory;
}
