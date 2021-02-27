<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddIpToLernTables extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vendor_tylercd100_lern_exceptions', function (Blueprint $table) {
            $table->string('ip')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vendor_tylercd100_lern_exceptions', function (Blueprint $table) {
            $table->dropColumn('ip');
        });
    }
}
