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
        Schema::create('alunos', function (Blueprint $table) {
            $table->id();
            $table->string('nome_completo');
            $table->integer('numero_estudante');
            $table->string('nome_pai');
            $table->string('nome_mae');
            $table->string('telefone');
            $table->foreignId('turma_id')->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreignId('sala_id')->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->date('data_nascimento');
            $table->string('morada');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alunos');
    }
};
