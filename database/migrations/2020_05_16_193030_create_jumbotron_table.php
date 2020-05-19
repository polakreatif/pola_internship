<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJumbotronTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jumbotron', function (Blueprint $table) {
            $table->id('id_jumbo');
            $table->string('header');
            $table->longText('konten');
            $table->string('link');
            $table->string('gambar_jumbo');
            $table->string('background');
            $table->boolean('is_published')->default(false);
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->timestamp('jumbo_dibuat')->nullable();
            $table->timestamp('jumbo_diperbarui')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jumbotron');
    }
}
