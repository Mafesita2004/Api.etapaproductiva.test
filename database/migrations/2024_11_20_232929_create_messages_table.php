<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->string("mensaje");
            $table->string("descripcion");
            $table->foreignId('id_role')->references('id')->on('roles')->onDelete('cascade');
            $table->foreignId('id_trainer')->references('id')->on('trainers')->onDelete('cascade');
            $table->foreignId('id_apprentice')->references('id')->on('apprentices')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('messages');
    }
};
