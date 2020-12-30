<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeStatusAtLeadsIsAvailableAtUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('leads', function (Blueprint $table) {
            $table->integer('status')->comment('0:Qualified , 1: DisQualified')->change();
        });

        Schema::table('users', function (Blueprint $table) {
            $table->integer('is_available')->comment('0:Disabled , 1: Enabled')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('leads', function (Blueprint $table) {
            //
        });

        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
