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
        Schema::create('user_addresses', function (Blueprint $table) {
            $table->id()->unsigned()->autoIncrement();
            $table->bigInteger('user_id')->unsigned();
            $table->string('name', 200);
            $table->string('country_code', 10);
            $table->text('detail_address');
            $table->string('state', 150)->nullable();
            $table->string('city', 150)->nullable();
            $table->string('district', 150)->nullable();
            $table->string('subdistrict', 150)->nullable();
            $table->string('postal_code', 20);
            $table->string('latitude', 100)->nullable();
            $table->string('longitude', 100)->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_addresses');
    }
};
