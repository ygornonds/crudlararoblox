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
        Schema::create('jogos', function (Blueprint $table) {
            $table->id();  // chave primária
            $table->string('nome');  // nome do jogo
            $table->foreignId('id_categoria')->constrained('categorias')->onDelete('cascade');  // chave estrangeira para 'categorias'
            $table->foreignId('id_criador')->constrained('criadores')->onDelete('cascade');  // chave estrangeira para 'criadores'
            $table->timestamps();  // colunas 'created_at' e 'updated_at'
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jogos');
    }
};
