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
        Schema::create('mahasiswa_21312026', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('no_mahasiswa', 50);
            $table->string('nama_mahasiswa', 100);
            $table->string('program_studi', 100);
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
        Schema::dropIfExists('mahasiswa_21312064');
    }
};
