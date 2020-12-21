<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leads', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('product_id');
            $table->integer('user_id')->nullable();
            $table->integer('source_id')->nullable();
            $table->string('phone');
            $table->string('email')->nullable();
            $table->timestamp('scheduled_on')->nullable();
            $table->timestamp('last_contact')->nullable();
            $table->integer('status')->default(0);
            $table->longText('lead')->nullable();
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
        Schema::dropIfExists('leads');
    }
}
