<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class knowledge_network extends Model
{
    use HasFactory;
    protected $fillable = [
        'name' 
    ];
    protected $table='knowledge_networks';
}
