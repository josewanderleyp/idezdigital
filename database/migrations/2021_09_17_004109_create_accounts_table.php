<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->increments("id");
            $table->string('idConta');
            $table->string('agencia');
            $table->string('numero');
            $table->string('digito');
            $table->string('razao_social');
            $table->string('nome_fantasia');
            $table->string('cnpj');

            $table->unsignedInteger('idUser')->comment('ID User');
            $table->foreign('idUser')->references('id')->on('users');

            $table->timestamps();

        });


        DB::table('accounts')->insert([
            'idConta' => '1',
            'agencia' => '0200',
            'numero' => '400',
            'digito' => '2',
            'razao_social' => 'Testando...',
            'nome_fantasia' => 'Testando...',
            'cnpj' => '01010102020100',
            'idUser' => 1
        ]);

        DB::table('accounts')->insert([
            'idConta' => '2',
            'agencia' => '0400',
            'numero' => '1400',
            'digito' => '220',
            'razao_social' => 'Testando...',
            'nome_fantasia' => 'Testando...',
            'cnpj' => '01010102020100',
            'idUser' => 1
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accounts');
    }
}
