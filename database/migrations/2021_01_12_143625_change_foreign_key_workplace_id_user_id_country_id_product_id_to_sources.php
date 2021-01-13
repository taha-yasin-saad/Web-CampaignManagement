<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class ChangeForeignKeyWorkplaceIdUserIdCountryIdProductIdToSources extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sources', function (Blueprint $table) {

            DB::statement('UPDATE `sources` SET `workplace_id` = 0 WHERE `workplace_id` IS NULL;');
            // $table->unsignedBigInteger('workplace_id')->nullable(false)->default(0)->change();
            $table->foreign('workplace_id')->references('id')->on('workplaces')->onDelete('cascade');

            DB::statement('UPDATE `sources` SET `user_id` = 0 WHERE `user_id` IS NULL;');
            // $table->unsignedBigInteger('user_id')->nullable(false)->default(0)->change();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            DB::statement('UPDATE `sources` SET `country_id` = 0 WHERE `country_id` IS NULL;');
            // $table->unsignedBigInteger('country_id')->nullable(false)->default(0)->change();
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');

            DB::statement('UPDATE `sources` SET `product_id` = 0 WHERE `product_id` IS NULL;');
            // $table->unsignedBigInteger('product_id')->nullable(false)->default(0)->change();
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');

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
        Schema::table('sources', function (Blueprint $table) {
            $table->dropForeign('sources_workplace_id_foreign');
            $table->dropForeign('sources_user_id_foreign');
            $table->dropForeign('sources_country_id_foreign');
            $table->dropForeign('sources_product_id_foreign');

        });
    }
}
