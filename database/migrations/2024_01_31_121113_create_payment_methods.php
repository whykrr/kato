<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_methods', function (Blueprint $table) {
            $table->integer('id')->autoIncrement()->unique();
            $table->string('code', 100)->index();
            $table->string('name', 100);
            $table->string('account_name', 200);
            $table->string('account_number', 100);
            $table->text('description')->nullable();
            $table->boolean('flag')->default(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payment_methods');
    }
};
