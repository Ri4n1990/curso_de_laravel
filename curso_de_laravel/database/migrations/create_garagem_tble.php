<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

use function Symfony\Component\Clock\now;

return new class extends Migration{

    public function up():void{

        Schema::create('cliente', function(Blueprint $table){
            $table->integer('id_cliente')->primary(true);
            $table->string('nome', 256);
            $table->string('email', 256)->nullable(false);
            $table->enum('genero', ['Masculino', 'Feminino']);
            


        });



        Schema::create('pedido', function(Blueprint $table){

            $table->id('id_pedido');
            $table->integer('numero_pedido')->nullable(false);
            $table->dateTime('data_pedido', 0)->nullable(false)->useCurrent();
            $table->decimal('valor_total',4,2)->nullable(false);
            $table->integer('id_cliente')->nullable(false);
            $table->integer('id_lanche')->nullable(false);

            $table->foreign('id_cliente')->references('id_cliente')->on('cliente');

            $table->foreign('id_lanche')->references('id_lanche')->on('lanches');

        });










        Schema::create('lanches', function(Blueprint $table){
            $table->integer('id_lanche')->primary();
            $table->string('nome_lanche',256)->nullable(false);
            $table->text('descricao')->nullable(false);
            $table->decimal('preco',4,2);
            

        });

    }


    public function down():void{

    }



};
