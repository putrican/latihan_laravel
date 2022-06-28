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
        Schema::create('sistems', function (Blueprint $table) {
            $table->id();
            $table->char('nis',8)->unique();
            $table->string('nama');
            $table->text('alamat');
            $table->string('kelas');
            $table->string('jurusan');
            $table->string('nama_orang_tua');
            $table->text('minat');
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
        Schema::dropIfExists('sistems');
    }
};
