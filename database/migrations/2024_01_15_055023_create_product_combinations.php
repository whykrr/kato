<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_combinations', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('product_id');
            $table->text('combination_string');
            $table->string('sku', 200);
            $table->double('price_idr')->unsigned();
            $table->double('price_usd')->unsigned();
            $table->integer('weight')->unsigned()
                ->comment('unit using gram');
            $table->text('unique_string');
            $table->integer('available_stock')->unsigned();

            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->fullText('unique_string');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('product_combinations');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
};
