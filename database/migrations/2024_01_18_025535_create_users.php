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
        Schema::create('users', function (Blueprint $table) {
            $table->id()->unsigned()->autoIncrement();
            $table->string('name', 150);
            $table->string('email', 200);
            $table->string('phone', 25);
            $table->text('password');
            $table->rememberToken();
            $table->string('referral_code', 20);
            $table->string('email_verified_token', 100);
            $table->timestamp('email_verified__at')->nullable();
            $table->string('phone_verified_code', 6);
            $table->timestamp('phone_verified_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
