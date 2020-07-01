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
            $table->id();
            $table->string('name');
            $table->integer('code');
            $table->float('price');
            $table->integer('quanlity');
            $table->string('description');
            $table->string('detail');
            $table->string('product_image');
            $table->datetime('top_hot');
            $table->integer('categories_id')->unsigned()->index();
            $table->integer('partner_id')->unsigned()->index();
            $table->integer('comment_id')->unsigned()->index();
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
