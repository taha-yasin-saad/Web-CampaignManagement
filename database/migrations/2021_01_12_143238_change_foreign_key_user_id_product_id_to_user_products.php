<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class ChangeForeignKeyUserIdProductIdToUserProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_products', function (Blueprint $table) {
            DB::statement('UPDATE `user_products` SET `user_id` = 0 WHERE `user_id` IS NULL;');
            $table->unsignedBigInteger('user_id')->nullable(false)->default(null)->change();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            DB::statement('UPDATE `user_products` SET `product_id` = 0 WHERE `product_id` IS NULL;');
            $table->unsignedBigInteger('product_id')->nullable(false)->default(null)->change();
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_products', function (Blueprint $table) {
            $table->dropForeign('user_products_user_id_foreign');
            // $table->dropIndex('user_products_user_id_index');
            $table->dropForeign('user_products_product_id_foreign');
            // $table->dropIndex('user_products_product_id_index');
        });
    }
}
