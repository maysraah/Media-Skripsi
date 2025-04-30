<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropSiswaIdFromNilaiTable extends Migration
{
    public function up()
    {
        Schema::table('nilais', function (Blueprint $table) {
            // Hapus foreign key constraint terlebih dahulu
            $table->dropForeign(['siswa_id']);

            // Lalu hapus kolomnya
            $table->dropColumn('siswa_id');
        });
    }

    public function down()
    {
        Schema::table('nilais', function (Blueprint $table) {
            $table->unsignedBigInteger('siswa_id')->nullable();

            // Tambahkan kembali foreign key jika diperlukan
            $table->foreign('siswa_id')->references('id')->on('siswa')->onDelete('cascade');
        });
    }
}
