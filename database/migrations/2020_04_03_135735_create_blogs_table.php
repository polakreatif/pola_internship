<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('title', 255)
                ->charset('latin1')
                ->collation('latin1_general_ci');
                
            $table->longText('description')->default('');

            $table->string('mediaUrl', 255)
                ->charset('latin1')
                ->collation('latin1_general_ci')
                ->default('');

            $table->integer('categoryId')
                ->unsigned()->default(1);
                
            $table->timestamps();

            $table->foreign('categoryId')
                ->references('id')->on('categories')
                ->onUpdate('cascade')
                ->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogs');
    }
}
