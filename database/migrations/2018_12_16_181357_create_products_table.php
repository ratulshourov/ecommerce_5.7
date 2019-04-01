<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->tinyInteger('category_id');
            $table->tinyInteger('manufacture_id');
            $table->string('product_name');
            $table->text('short_description');
            $table->text('long_description');
            $table->float('price',10,2);
            $table->string('product_image');
            $table->integer('qty');
            $table->string('color');
            $table->string('size');
            $table->integer('publication_status');
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
