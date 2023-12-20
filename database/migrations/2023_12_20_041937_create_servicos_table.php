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
        Schema::create('servicos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('loja');
            $table->integer('responsavel');
            $table->longText('descricao');
            $table->decimal('preco', $precision = 10, $scale = 2);
            $table->dateTimeTz('data_entrada', $precision = 0);
            $table->dateTimeTz('data_saida', $precision = 0)->nullable();;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('servicos');
    }
};
