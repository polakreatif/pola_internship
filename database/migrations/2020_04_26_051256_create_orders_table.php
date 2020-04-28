<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('product_id');
            $table->decimal('weight', 8,2)->default(0);
            $table->string('name', 255);
            $table->string('phone', 255);
            $table->string('address', 255);
            $table->string('note', 255)
                ->nullable()
                ->default('');
            $table->unsignedInteger('status_id')
                ->default(1);

            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('updated_by')
                ->nullable();
            $table->timestamps();

            $table->foreign('product_id')
                ->references('id')->on('products')
                ->onUpdate('cascade')
                ->onDelete('restrict');
            $table->foreign('status_id')
                ->references('id')->on('order_status')
                ->onUpdate('cascade')
                ->onDelete('restrict');
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
        Schema::dropIfExists('orders');
    }
}
