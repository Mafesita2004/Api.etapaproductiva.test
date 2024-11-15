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
        Schema::create('contract_types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        // Insertar programas directamente en la migración
        DB::table('programs')->insert([
            ['name' => 'Contrato De Aprendizaje'],
            ['name' => 'Vinculo Laboral'],
            ['name' => 'Pasantia'],
            ['name' => 'Unidad Productiva'],
            ['name' => 'Proyecto Productivo'],
            ['name' => 'Pasantia'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contract_types');
    }
};
