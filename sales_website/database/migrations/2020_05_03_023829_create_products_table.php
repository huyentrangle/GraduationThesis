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
            $table->increments('id');
            $table->string('productCode')->unique();
            $table->string('productName');
            $table->string('slug');
            $table->decimal('price',18,0)->default(0);
            $table->boolean('feature')->unsigned();
            $table->tinyInteger('state')->unsigned();
            $table->text('infomation')->nullable();
            $table->text('description')->nullable();
            $table->string('images');
            //khoa ngoai:
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
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
