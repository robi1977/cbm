<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('links', function (Blueprint $table) {
            $table->id();
            $table->string('link', 350);
            $table->unsignedBigInteger('sample_id')->nullable();
            $table->unsignedBigInteger('link_category_id')->nullable();
            $table->timestamps();

            $table->foreign('sample_id')->references('id')->on('samples')->onDelete('set null');
            $table->foreign('link_cetegory_id')->references('id')->on('link_categories')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('links');
    }
}
