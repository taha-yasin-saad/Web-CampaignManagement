<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRoleToWorkplaceUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('workplace_users', function (Blueprint $table) {
            $table->integer('role')->default(0)->after('workplace_id')->comment('0-owner,1-admin,2-leader,3-salesAgent');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('workplace_users', function (Blueprint $table) {
            $table->dropColumn('role');
        });
    }
}
