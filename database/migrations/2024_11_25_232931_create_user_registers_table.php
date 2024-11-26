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
        Schema::create('user_registers', function (Blueprint $table) {
            $table->id();
            $table->integer('identificacion');
            $table->string('name');
            $table->string('last_name');
            $table->string('email');
<<<<<<< HEAD:database/migrations/2014_10_11_232927_create_user_registers_table.php
            $table->string('SENA_account');
=======
            $table->string('password');
            $table->integer('phone');
            $table->string('address');
>>>>>>> 4d43dd14c9d70ed3f2a983788dd4021de3c0776a:database/migrations/2024_11_25_232931_create_user_registers_table.php
            $table->string('department');
            $table->string('municipality');
            $table->string('program');
            $table->string('academic_level');
            $table->string('knowledge_network');
            $table->foreignId('id_role')->references('id')->on('roles')->onDelete('cascade');
            $table->foreignId('id_contract')->references('id')->on('contracts')->onDelete('cascade');
            $table->foreignId('id_followup')->references('id')->on('followups')->onDelete('cascade');
            $table->foreignId('id_company')->references('id')->on('companies')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_registers');
    }
};
