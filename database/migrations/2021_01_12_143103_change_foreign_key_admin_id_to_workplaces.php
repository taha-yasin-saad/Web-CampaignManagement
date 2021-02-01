<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class ChangeForeignKeyAdminIdToWorkplaces extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('workplaces', function (Blueprint $table) {
            DB::statement('SET FOREIGN_KEY_CHECKS = 0;');

            DB::statement('UPDATE `workplaces` SET `admin_id` = 0 WHERE `admin_id` IS NULL;');
            $table->unsignedBigInteger('admin_id')->nullable(false)->default(null)->change();
            $table->foreign('admin_id')->references('id')->on('admins')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('workplaces', function (Blueprint $table) {
            $table->dropForeign('workplaces_admin_id_foreign');
            // $table->dropIndex('workplaces_admin_id_index');
        });
    }
}
