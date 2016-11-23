<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMataKuliahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matakuliah', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->integer('dosen_id')->unsigned()->nullable();
            $table->foreign('dosen_id')->references('id')->on('dosen')->onDelete('cascade');

            $table->integer('kelas_id')->unsigned()->nullable();
            $table->foreign('kelas_id')->references('id')->on('kelas')->onDelete('cascade');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('matakuliah');
    }
}
