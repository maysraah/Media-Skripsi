<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('nilais', function (Blueprint $table) {
            $table->id();

            // foreign key ke siswas.id
            $table->unsignedBigInteger('siswa_id');
            $table->foreign('siswa_id')->references('id')->on('siswas')->onDelete('cascade');

            // foreign key ke siswas.user_id
            $table->unsignedBigInteger('siswa_user_id');
            $table->foreign('siswa_user_id')->references('user_id')->on('siswas')->onDelete('cascade');

            $table->enum('jenis_tes', [
                'kuis pencarian linear',
                'kuis pencarian biner',
                'kuis pencarian beruntun dengan sentinel',
                'evaluasi'
            ]);

            $table->integer('nilai')->nullable();
            $table->time('waktu_pengerjaan')->nullable(); // default 0 tidak valid, time tidak bisa default '0'
            $table->integer('percobaan')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('nilais');
    }
};
