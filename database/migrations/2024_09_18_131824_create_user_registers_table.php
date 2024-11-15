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
            $table->string('email_Sena');
            $table->string('department');
            $table->string('municipality');
            $table->string('modalidad');
            $table->foreignId('id_role')->references('id')->on('roles')->onDelete('cascade');
            $table->foreignId('id_followup')->references('id')->on('followups')->onDelete('cascade');
            $table->foreignId('id_company')->references('id')->on('companies')->onDelete('cascade');
            $table->foreignId('id_academic_level')->references('id')->on('academic_levels')->onDelete('cascade');
            $table->foreignId('id_knowledge_network')->references('id')->on('knowledge_networks')->onDelete('cascade');
            $table->foreignId('id_contract_type')->references('id')->on('contract_types')->onDelete('cascade');
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
