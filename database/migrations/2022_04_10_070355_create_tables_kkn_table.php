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
        Schema::create('tables_kkn', function (Blueprint $table) {
            $table->bigIncrements('id_kkn');
            $table->string('judul_kkn', 50);
            $table->string('file_kkn', 255);
            $table->string('nama_kelompok', 50);
            $table->string('no_kelompok', 50)->unique();
            $table->string('nama_user', 50);
            $table->varchar('npm_nip');
            $table->varchar('tahun');
            $table->integer('semester');
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
        Schema::dropIfExists('tables_kkn');
    }
};
