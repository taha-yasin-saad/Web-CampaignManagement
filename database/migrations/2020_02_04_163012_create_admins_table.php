<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('phone');
            $table->string('email');
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
        // Insert some stuff
        DB::table('admins')->insert(
            array(
                'name' => 'Admin',
                'phone' => '123456788',
                'email' => 'admin@yahoo.com',
                'password' =>  bcrypt('123456')
            )
        );


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins');
    }
}
