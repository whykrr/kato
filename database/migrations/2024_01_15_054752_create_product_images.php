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
        Schema::create('product_images', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('product_id');
            $table->uuid('product_variation_option_id')->nullable();
            $table->text('image');
            $table->tinyInteger('is_featured')->unsigned()
                ->comment('0 = not featured, 1 = featured');

            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('product_variation_option_id')->references('id')->on('product_variation_options')->onDelete('cascade');
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
        Schema::dropIfExists('product_images');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
};
