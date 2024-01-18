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
        Schema::create('orders', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('order_no', 100)->unique();
            $table->date('date');
            $table->bigInteger('user_id')->unsigned();
            $table->string('user_name', 150)->nullable();
            $table->enum('currency', ['IDR', 'USD'])->default('IDR');
            $table->double('order_total')->unsigned();
            $table->integer('discount_percent')->unsigned()->nullable();
            $table->double('discount')->unsigned()->nullable();
            $table->double('discount_point')->unsigned()->nullable();
            $table->integer('total_weight')->unsigned()->nullable();
            $table->double('shipping_fee')->unsigned()->nullable();
            $table->double('shipping_discount')->unsigned()->nullable();
            $table->string('shipping_country', 10)->nullable();
            $table->text('shipping_details')->nullable();
            $table->double('order_grand_total')->unsigned();
            $table->integer('payment_method_id');
            $table->string('payment_type', 20);
            $table->string('payment_bank_code', 50)->nullable();
            $table->text('payment_evidence')->nullable();
            $table->integer('payment_verified_by')->nullable();
            $table->timestamp('payment_verified_at')->nullable();
            $table->text('payment_details');
            $table->tinyInteger('status')
                ->comment('0 = order placed, 1 = waiting payment, 11 = payment verified, 2 = proceed, 21 = shipping, 23 = shipped, 8 = done, 91 = canceled system, 92 = canceled user');
            $table->text('canceled_reason')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
