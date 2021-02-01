<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

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
            DB::statement('UPDATE `workplace_users` SET `user_id` = 0 WHERE `user_id` IS NULL;');
            $table->unsignedBigInteger('user_id')->nullable(false)->default(null)->change();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            DB::statement('UPDATE `workplace_users` SET `workplace_id` = 0 WHERE `workplace_id` IS NULL;');
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
        Schema::table('workplace_users', function (Blueprint $table) {
            $table->dropForeign('workplace_users_user_id_foreign');
            // $table->dropIndex('workplace_users_user_id_index');
            $table->dropForeign('workplace_users_workplace_id_foreign');
            // $table->dropIndex('workplace_users_workplace_id_index');
        });
    }
}
