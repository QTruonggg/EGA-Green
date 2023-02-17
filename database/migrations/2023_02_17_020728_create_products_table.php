<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('images');
            $table->string('code');
            $table->integer('qty');
            $table->string('category_id');
            $table->decimal('oldPrice');
            $table->decimal('salePrice');
            $table->string('description');
            $table->string('status');
            $table->string('seo_keyword');
            $table->string('seo_description');
            $table->string('seo_title');
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
};
