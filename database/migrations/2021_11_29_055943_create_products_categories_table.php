<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_categories', function (Blueprint $table) {
            $table->id();
            $table->string('en_title');
            $table->string('ru_title');
            $table->bigInteger('view_rate')->default(0);
            $table->text('icon')->default('<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 491.6 491.6"><path d="M394.65 224.2c1.2-8.7 1.8-17.6 1.8-26.6 0-109-88.7-197.6-197.6-197.6-109 0-197.6 88.7-197.6 197.6 0 109 88.7 197.6 197.6 197.6 7.9 0 15.7-.5 23.4-1.4 16.9 56.5 69.3 97.8 131.2 97.8 75.5 0 136.9-61.4 136.9-136.9 0-61.1-40.3-113-95.7-130.5zm-137.1 130.5c0-52.9 43-95.9 95.9-95.9 19 0 36.8 5.6 51.7 15.2l-132.5 132.4c-9.6-14.9-15.1-32.6-15.1-51.7zM42.15 197.6c0-86.4 70.3-156.6 156.6-156.6 35.8 0 68.8 12.1 95.3 32.4L74.55 292.8c-20.3-26.4-32.4-59.4-32.4-95.2zm61.4 124.2l219.5-219.5c20.3 26.4 32.4 59.4 32.4 95.3 0 6.9-.5 13.6-1.3 20.2h-.7c-75 0-136.1 60.6-136.9 135.4-5.8.7-11.7 1-17.7 1-35.8 0-68.9-12.1-95.3-32.4zm249.9 128.8c-19 0-36.8-5.6-51.7-15.2L434.15 303c9.6 14.9 15.2 32.7 15.2 51.7 0 52.9-43.1 95.9-95.9 95.9z"/></svg>');
            $table->boolean('trashed')->default(false);
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
        Schema::dropIfExists('products_categories');
    }
}
