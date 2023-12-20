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
        Schema::create('produtos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('loja');
            $table->string('nome');
            $table->longText('descricao');
            $table->decimal('preco', $precision = 10, $scale = 2);
            $table->integer('quantidade');
            $table->string('cod_barras')->nullable()->unique();
            $table->enum('ativo',['sim','nao'])->default('sim');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};
