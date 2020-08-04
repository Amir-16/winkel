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
            $table->integer('brand_id');
            $table->integer('lebel_id');
            $table->string('title');
            $table->string('picture');
            $table->text('short_description');
            $table->text('description');
            $table->integer('total_sales');
            $table->string('product_type');
            $table->tinyInteger('is_new');
            $table->float('cost');
            $table->float('mrp');
            $table->float('special_price');
            $table->tinyInteger('soft_delete');
            $table->tinyInteger('is_draft');
            $table->tinyInteger('is_active');
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
