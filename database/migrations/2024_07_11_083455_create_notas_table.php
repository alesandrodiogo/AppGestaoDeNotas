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
        Schema::create('notas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('aluno_id')->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreignId('anolectivo_id')->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreignId('disciplina_id')->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->integer('mt1')->nullable();
            $table->integer('mt2')->nullable();
            $table->integer('mt3')->nullable();
            $table->integer('mfd')->nullable();
            $table->integer('mac')->nullable();
            $table->integer('npp')->nullable();
            $table->integer('npt')->nullable();
            $table->integer('mt')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notas');
    }
};
