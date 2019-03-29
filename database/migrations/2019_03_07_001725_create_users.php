<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\User;

class CreateUsers extends Migration
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
            $table->string('first_name' , 225);
            $table->string('last_name' ,225);
            $table->string('email' , 225);
            $table->string('phone_number' , 225);
            $table->string('password' ,  225);
            $table->string('country' ,225);
            $table->string('state' , 225);
            $table->string('interest', 500);
            $table->string('image');
            $table->timestamps();
            $table->boolean('user_activated')->Default(0);
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
