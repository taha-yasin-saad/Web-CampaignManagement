<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            // $table->unsignedBigInteger('zone_id')->nullable(false)->default(0)->change();
            $table->foreign('zone_id')->references('id')->on('zones')->onDelete('cascade');
            // $table->unsignedBigInteger('admin_id')->nullable(false)->default(0)->change();
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
        Schema::table('admin_zones', function (Blueprint $table) {
            $table->dropForeign('admin_zones_zone_id_foreign');
            // $table->dropIndex('admin_zones_zone_id_index');
            $table->dropForeign('admin_zones_admin_id_foreign');
            // $table->dropIndex('admin_zones_admin_id_index');
        });
    }
}
