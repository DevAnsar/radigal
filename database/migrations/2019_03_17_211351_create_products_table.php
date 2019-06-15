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
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('slug');
            $table->string('description');
            $table->text('body');
            $table->text('cutoff')->nullable();
            $table->string('price');
            $table->text('images');
            $table->string('tags');
            $table->text('cat');
            $table->integer('discount');
            $table->integer('viewCount')->default(0);
            $table->integer('saleCount')->default(0);
            $table->integer('stockCount');
            $table->integer('commentCount')->default(0);
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
