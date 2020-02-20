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
            $table->string('name');
            $table->double('price');
            $table->integer('release_year');
            $table->unsignedBigInteger('vendor_id');
            $table->unsignedBigInteger('category_id');
            $table->string('slug');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::table('products', function (Blueprint $table) {
            $table->foreign('vendor_id')->references('id')->on('vendors')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
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
