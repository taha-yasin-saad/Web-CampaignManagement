<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            // $table->unsignedBigInteger('admin_id')->nullable()->change();
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
