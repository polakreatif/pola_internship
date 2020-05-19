<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCareerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('career', function (Blueprint $table) {
            $table->id('id_career');
            $table->string('nama_career');
            $table->longText('desc_career');
            $table->string('status');
            $table->boolean('published_career')->default(false);
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->string('lokasi_career');
            $table->integer('viewers_count_career')->default(0);
            $table->timestamp('apllication_post')->nullable();
            $table->timestamp('apllication_deadline')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('career');
    }
}
