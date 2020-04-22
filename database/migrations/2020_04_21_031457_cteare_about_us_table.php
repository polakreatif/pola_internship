<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CteareAboutUsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_us', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title', 255)->nullable($value = true)->default('');
            $table->string('description', 255);
            $table->string('image', 255)->default('images/image.jpg');
            $table->string('sumber_link', 255)->nullable($value = true)->default('www.freepik.com');
            $table->string('sumber_label', 255)->nullable($value = true)->default('Designed by Freepik');
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
        Schema::dropIfExists('about_us');
    }
}
