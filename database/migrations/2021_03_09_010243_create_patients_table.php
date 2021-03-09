<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->integer('sexo'); // 2 mulher  3 homem
            $table->integer('estado_civil'); // deixar default 0
            $table->integer('convenio'); // deixar default 1
            $table->string('endereco'); // rua
            $table->string('numero'); // numero casa
            $table->string('complemento'); 
            $table->string('bairro'); 
            $table->string('cidade'); 
            $table->string('uf'); 
            $table->string('cep1'); 
            $table->string('cep2'); 
            $table->string('telefone_ddd'); 
            $table->string('telefone'); 
            $table->string('comercial_ddd'); 
            $table->string('comercial'); 
            $table->string('email')->unique(); 
            $table->date('data_nasc');
            $table->text('ficha'); 
            $table->string('profissao');
            $table->text('alergias');
            $table->text('observacao');
            $table->text('indicacao');
            $table->date('data_cadastro');
            $table->date('data_alteracao');
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
        Schema::dropIfExists('patients');
    }
}
