<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropBasketsTablesAndColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('receipts', function (Blueprint $table) {
            $table->dropColumn('basket_id');
        });
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('basket_item_id');
        });

        Schema::dropIfExists('baskets');
        Schema::dropIfExists('basket_items');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('basket_items', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
        });
        Schema::create('baskets', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->integer('creator_id');
        });

        Schema::table('receipts', function (Blueprint $table) {
            $table->integer('basket_id')->nullable();
        });
        Schema::table('products', function (Blueprint $table) {
            $table->integer('basket_item_id');
        });
    }
}
