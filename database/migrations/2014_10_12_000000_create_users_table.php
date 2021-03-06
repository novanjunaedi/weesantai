<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->string('name');
            $table->string('gender')->nullable();
            $table->string('email')->unique();
            $table->date('dateofbirth')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('img')->nullable();
            $table->string('destination_name')->nullable();
            $table->string('buy_date')->nullable();
            $table->string('valid_until')->nullable();
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
        Schema::dropIfExists('users');
    }
}
