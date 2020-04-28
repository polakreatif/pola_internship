<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 255);
            $table->string('slug', 255)->unique();
            $table->decimal('price', 19,2);
            $table->unsignedInteger('type')->default(2);
            $table->mediumText('description')->default('');

            $table->string('image', 255)->default('images/image.jpg');
            $table->string('sumber_link', 255)
                ->nullable()
                ->default('www.freepik.com');
            $table->string('sumber_label', 255)
                ->nullable()
                ->default('Designed by Freepik');

            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('updated_by')
                ->nullable();
            $table->timestamps();

            $table->foreign('created_by')
                ->references('id')->on('users')
                ->onUpdate('cascade')
                ->onDelete('restrict');
            $table->foreign('updated_by')
                ->references('id')->on('users')
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
        Schema::dropIfExists('products');
    }
}
