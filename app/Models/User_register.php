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
    



    // Encriptar la contraseña automáticamente al crear o actualizar
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }
}
