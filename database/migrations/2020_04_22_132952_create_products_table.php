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
            $table->decimal('price', 19,2);
            $table->unsignedInteger('type')->default(2);
            $table->mediumText('description')->nullable($value=true)->default('');
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
        Schema::dropIfExists('products');
    }
}
