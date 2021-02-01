<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class ChangeForeignKeyZoneIdAdminIdToAdminZones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('admin_zones', function (Blueprint $table) {
            DB::statement('UPDATE `admin_zones` SET `zone_id` = 0 WHERE `zone_id` IS NULL;');
            $table->unsignedBigInteger('zone_id')->nullable(false)->default(null)->change();
            $table->foreign('zone_id')->references('id')->on('zones')->onDelete('cascade');

            DB::statement('UPDATE `admin_zones` SET `admin_id` = 0 WHERE `admin_id` IS NULL;');
            $table->unsignedBigInteger('admin_id')->nullable(false)->default(null)->change();
            $table->foreign('admin_id')->references('id')->on('admins')->onDelete('cascade');

            DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('admin_zones', function (Blueprint $table) {
            $table->dropForeign('admin_zones_zone_id_foreign');
            // $table->dropIndex('admin_zones_zone_id_index');
            $table->dropForeign('admin_zones_admin_id_foreign');
            // $table->dropIndex('admin_zones_admin_id_index');
        });
    }
}
