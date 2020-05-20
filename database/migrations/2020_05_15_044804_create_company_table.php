<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company', function (Blueprint $table) {
            $table->id('id_company');
            $table->string('nama_company');
            $table->string('slogan');
            $table->longText('about');
            $table->string('email');
            $table->string('whatsapp');
            $table->string('instagram');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('youtube');
            $table->string('logo');
            $table->string('about_image');
            $table->boolean('is_published')->default(false);
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
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
        Schema::dropIfExists('company');
    }
}
