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
            $table->increments('id');
            $table->string('name');
            $table->string('surname')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('company')->nullable();
            $table->string('urun_resmi')->nullable();
            $table->string('website')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('country')->nullable();
            $table->string('state')->nullable();
            $table->string('zipcode')->nullable();
            $table->string('addcomment')->nullable();
            $table->boolean('verified')->default(false);
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();


        });
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
