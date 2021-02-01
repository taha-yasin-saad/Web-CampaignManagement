<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class ChangeForeignKeyWorkplaceIdToTimes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('times', function (Blueprint $table) {
            DB::statement('UPDATE `times` SET `workplace_id` = 0 WHERE `workplace_id` IS NULL;');
            $table->unsignedBigInteger('workplace_id')->nullable(false)->default(null)->change();
            $table->foreign('workplace_id')->references('id')->on('workplaces')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('times', function (Blueprint $table) {
            $table->dropForeign('times_workplace_id_foreign');
            // $table->dropIndex('times_workplace_id_index');
        });
    }
}
