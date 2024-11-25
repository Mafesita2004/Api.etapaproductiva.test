<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    use HasFactory;
    public function Apprentice(){
        return $this->hasOne('App\Models\Apprentice');
    }

    public function Company(){
        return $this->hasMany('App\Models\Company');
    }
    // Define los campos que se pueden asignar masivamente
    protected $fillable = [
        'codigo',
        'tipo',
        'fecha_inicio',
        'fecha_fin',
        'id_company'
    ];

    // Relación con la tabla companies

}
