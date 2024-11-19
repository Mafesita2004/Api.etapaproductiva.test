<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_register extends Model
{
    use HasFactory;

    // Opcionalmente, define la tabla si no sigue la convención de pluralización
    protected $table = 'user_registers';

    // Campos que se pueden asignar masivamente
    protected $fillable = [
        'identificacion',
        'name',
        'last_name',
        'email',
        'SENA_account',
        'department',
        'municipality',
        'mode',
        'id_role',
        'id_contract',
        'id_followup',
        'id_company',
        'id_trainer',
    ];

    // Relación con la tabla roles
    public function role()
    {
        return $this->belongsTo(Role::class, 'id_role');
    }

    // Relación con la tabla contracts
    public function contract()
    {
        return $this->belongsTo(Contract::class, 'id_contract');
    }

    // Relación con la tabla followups
    public function followup()
    {
        return $this->belongsTo(Followup::class, 'id_followup');
    }

    // Relación con la tabla companies
    public function company()
    {
        return $this->belongsTo(Company::class, 'id_company');
    }

    public function Trainer(){
        return $this->hasMany('App\Models\Trainer');
    }

    // Encriptar la contraseña automáticamente al crear o actualizar
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }
}
