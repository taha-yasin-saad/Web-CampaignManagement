<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeAdminIdToNullableWorkplacesTable extends Migration
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
            $table->dropForeign('workplaces_admin_id_foreign');
            $table->unsignedBigInteger('admin_id')->default(0)->change();
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
            //
        });
    }
}
