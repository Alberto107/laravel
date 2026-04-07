<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

    //  criar tabela
    public function up(): void
    {
        Schema::create('aluno', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nome');
            $table->string('email')->unique();
            $table->string('telefone');
        });
    }

    /**
     * Reverse the migrations.
     */

    //  destruir tabela
    public function down(): void
    {
        Schema::dropIfExists('aluno');
    }
};
