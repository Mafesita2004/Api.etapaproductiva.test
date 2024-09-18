<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_register extends Model
{
    use HasFactory;
    public function Role(){
        return $this->belongsTo('App\Models\Role');
    }
    public function Contract(){
        return $this->belongsTo('App\Models\Contract');
    }
    public function Followup(){
        return $this->belongsTo('App\Models\Followup');
    }
     public function Company(){
            return $this->belongsTo('App\Models\Company');
        
    }
    public function Academic_level(){
        return $this->belongsTo('App\Models\Academic_level');
    
}
public function Knowledge_network(){
    return $this->belongsTo('App\Models\Knowledge_network');

}

public function Contract_type(){
    return $this->belongsTo('App\Models\Contract_type');

}

}
