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
        Schema::create('apprentices', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('program');
            $table->string('ficha');
            $table->foreignId('id_contract')->references('id')->on('contracts')->onDelete('cascade');
            $table->unsignedBigInteger('trainer_id')->nullable();


            $table->foreign('trainer_id')
            ->references('id')
            ->on('trainers')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apprentices');
    }
};