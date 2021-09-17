<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments("id");
            $table->string('name');
            $table->string('cpf');
            $table->string('telefone');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        $emailDev = 'jose@josew.com.br';
        $passwordDev = Hash::make('123123123');

        DB::table('users')->insert([
            'name' => 'José',
            // 'last_name' => 'Paiva',
            'cpf' => '010.010.010-00',
            'telefone' => '4399999999',
            'email' => $emailDev,
            'password'=> $passwordDev,

        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
