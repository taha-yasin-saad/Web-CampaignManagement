<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sources', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('workplace_id');
            $table->integer('user_id');
            $table->string('name')->nullable();
            $table->integer('country_id')->nullable();
            $table->string('website')->nullable();
            $table->integer('product_id')->nullable();
            $table->enum('widget_type', array('icon', 'text'));
            $table->enum('alignment', array('right', 'left'));
            $table->string('primary')->nullable();
            $table->string('secondary')->nullable();
            $table->string('icon_type')->nullable();
            $table->enum('bubble', array('on', 'off'));
            $table->string('bubble_line_1')->nullable();
            $table->string('bubble_line_2')->nullable();
            $table->string('bubble_bg_color')->nullable();
            $table->string('bubble_text_color')->nullable();
            $table->string('text_text')->nullable();
            $table->integer('text_round')->nullable();
            $table->string('fields')->nullable();
            $table->string('custom_lable_1')->nullable();
            $table->string('custom_lable_2')->nullable();
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
        Schema::dropIfExists('sources');
    }
}
