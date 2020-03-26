<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('full_name');
            $table->smallInteger('phone_number');
            $table->string('email')->unique();
            $table->boolean('verified');
            $table->string('password');
            $table->float('balance');
            $table->string('street');
            $table->string('city');
            $table->integer('post_code');
            $table->string('country');
            $table->string('iban');
            $table->string('bicswift');
            $table->string('bank_name');
            $table->boolean('active');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('users');
    }
}
