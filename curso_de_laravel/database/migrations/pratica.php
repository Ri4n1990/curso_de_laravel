<?php



namespace Database\Migrations;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;



return new class extends Migration{

    public function up():void{
        Schema::create('cliente', function(Blueprint $table){
            $table->id();
            $table->string('nome',256)->nullable(false);
            $table->enum('genero',['Feminino','Masculino']);
            $table->date('nascimento')->nullable(false);
            $table->string('senha',256);
            

        });

    }



    public function down():void{

    }





};