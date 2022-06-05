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
        Schema::create('referral_forgot_password', function (Blueprint $table) {
            $table->id();
            $table->string('kode', 255)->unique();
            $table->string('email');
            $table->enum('status', ['wait', 'cancel', 'confirmed'])->default('wait');
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
        Schema::dropIfExists('referral_forgot_password');
    }
};
