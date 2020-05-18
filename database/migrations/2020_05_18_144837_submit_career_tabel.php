<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SubmitCareerTabel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('submit_careers', function (Blueprint $table) {
            $table->id('id_submit');
            $table->string('nama');
            $table->string('email');
            $table->mediumText('alamat');
            $table->mediumText('pengalaman');
            $table->string('portofolio');
            $table->string('cv');
            $table->timestamp('tanggal_dibuat')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('submit_careers');
    }
}
