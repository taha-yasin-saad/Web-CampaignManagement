<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeForeignKeyUserIdWorkplaceIdToWorkplaceUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('workplace_users', function (Blueprint $table) {
            // $table->unsignedBigInteger('user_id')->nullable(false)->default(0)->change();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            // $table->unsignedBigInteger('workplace_id')->nullable(false)->default(0)->change();
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
        Schema::table('workplace_users', function (Blueprint $table) {
            $table->dropForeign('workplace_users_user_id_foreign');
            // $table->dropIndex('workplace_users_user_id_index');
            $table->dropForeign('workplace_users_workplace_id_foreign');
            // $table->dropIndex('workplace_users_workplace_id_index');
        });
    }
}
