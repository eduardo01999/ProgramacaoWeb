<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string("nome");
            $table->string("descricao");
            $table->string("preco");
            //para colocar chave estrangeira usar essa estrutura \/
            $table->unsignedBigInteger("categoria_id");
            $table->foreign("categoria_id")
                ->references("id")
                ->on("categorias");
            $table->unsignedBigInteger("fornecedor_id");
            $table->foreign("fornecedor_id")
                ->references("id")
                ->on("fornecedors");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos');
    }
}
