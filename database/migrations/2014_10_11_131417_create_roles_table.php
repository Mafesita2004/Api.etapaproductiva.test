<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string("role_type");
            $table->timestamps();
        });

        // Inserta registros iniciales en la tabla 'roles'
        DB::table('roles')->insert([
            ['role_type' => 'SuperAdmin'],
            ['role_type' => 'Administrador'],
            ['role_type' => 'Instructor'],
            ['role_type' => 'Aprendiz']
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roles');
    }
};