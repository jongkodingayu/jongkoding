<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKaryawanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karyawan', function (Blueprint $table) {
            $table->string('nik', 20)->primary();
            $table->string('nama', 20);
            $table->string('jk', 1);
            $table->text('alamat')->nullable();
            $table->string('tmp_lahir', 50);
            $table->date('tgl_lahir');
            $table->string('telepon', 20)->nullable();
            $table->integer('jurusan')->unsigned();
            $table->integer('nilai')->nullable()->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('karyawan');
    }
}
