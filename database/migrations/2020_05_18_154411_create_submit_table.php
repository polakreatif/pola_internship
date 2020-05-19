<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubmitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('submit', function (Blueprint $table) {
            $table->id('id');
            $table->string('nama');
            $table->string('email');
            $table->string('no_hp');
            $table->string('gambar');
            $table->string('cv');
            $table->boolean('is_published')->default(false);
            $table->unsignedBigInteger('id_career');
            $table->foreign('id_career')
                ->references('id_career')
                ->on('career')
                ->onDelete('cascade');
            $table->integer('viewers_count')->default(0);
            $table->timestamp('tanggal_dibuat')->nullable();
            $table->timestamp('tanggal_diperbarui')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('submit');
    }
}
