<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MakeReceiptsBasketIdColumnNullable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('receipts', function (Blueprint $table) {
            $table->integer('basket_id')->nullable()->change(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table('receipts', function (Blueprint $table) {
            $table->integer('basket_id')->nullable(false)->change();
        });
    }
}
