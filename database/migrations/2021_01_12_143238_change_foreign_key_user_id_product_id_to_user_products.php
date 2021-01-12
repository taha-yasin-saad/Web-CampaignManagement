<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            // $table->unsignedBigInteger('user_id')->nullable(false)->default(0)->change();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            // $table->unsignedBigInteger('product_id')->nullable(false)->default(0)->change();
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
