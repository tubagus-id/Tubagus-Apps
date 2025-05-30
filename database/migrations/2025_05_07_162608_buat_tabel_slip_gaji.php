<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tb_slip_gaji', function (Blueprint $table) {
            $table->id();
            $table->string('perusahaan');
            $table->string('bulan');
            $table->string('tahun');
            $table->string('jumlah');
            $table->text('keterangan')->nullable();
            $table->string('lampiran');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
