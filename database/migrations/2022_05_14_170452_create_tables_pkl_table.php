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
        Schema::create('tables_pkl', function (Blueprint $table) {
            $table->bigIncrements('id_pkl');
            $table->string('judul_pkl', 50);
            $table->string('instansi_pkl', 100);
            $table->string('npm', 20);
            $table->string('nama_mhs', 50);
            $table->string('nip', 50);
            $table->integer('tahun');
            $table->string('semester', 20);
            $table->string('file_pkl', 255);
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
        Schema::dropIfExists('tables_pkl');
    }
};
