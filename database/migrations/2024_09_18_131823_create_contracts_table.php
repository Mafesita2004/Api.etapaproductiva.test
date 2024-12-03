<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
            $table->integer("code");
            $table->string("type");
            $table->date("start_date");
            $table->date("end_date");
            $table->foreignId('id_company')->constrained('companies')->onDelete('cascade'); // Asegúrate de que 'companies' es el nombre correcto
            $table->timestamps();
        });
        DB::table('contracts')->insert([
            'code'=> 0004,
            'type'=> 'Hola',
            'start_date'=> '2024/12/03',
            'end_date'=> '2025/07/22',
            'id_company'=> 1,
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contracts');
    }
};
