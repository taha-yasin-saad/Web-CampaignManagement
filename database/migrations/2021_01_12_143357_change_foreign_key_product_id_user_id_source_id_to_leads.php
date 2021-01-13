<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class ChangeForeignKeyProductIdUserIdSourceIdToLeads extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('leads', function (Blueprint $table) {

            DB::statement('UPDATE `leads` SET `product_id` = 0 WHERE `product_id` IS NULL;');
            $table->unsignedBigInteger('product_id')->nullable(false)->default(null)->change();
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');

            DB::statement('UPDATE `leads` SET `user_id` = 0 WHERE `user_id` IS NULL;');
            $table->unsignedBigInteger('user_id')->nullable(false)->default(null)->change();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            DB::statement('UPDATE `leads` SET `source_id` = 0 WHERE `source_id` IS NULL;');
            $table->unsignedBigInteger('source_id')->nullable(false)->default(null)->change();
            $table->foreign('source_id')->references('id')->on('sources')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('leads', function (Blueprint $table) {
            $table->dropForeign('leads_product_id_foreign');
            // $table->dropIndex('leads_product_id_index');
            $table->dropForeign('leads_user_id_foreign');
            // $table->dropIndex('leads_user_id_index');
            $table->dropForeign('leads_source_id_foreign');
            // $table->dropIndex('leads_source_id_index');
        });
    }
}
