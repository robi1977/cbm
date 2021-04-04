<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSamplesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('samples', function (Blueprint $table) {
            $table->id();
            $table->string('number',6);
            $table->unsignedBigInteger('alloy_id')->nullable();
            $table->unsignedBigInteger('substrate_id')->nullable();
            $table->unsignedBigInteger('support_id')->nullable();
            $table->unsignedBigInteger('capillary_id')->nullable();
            $table->unsignedBigInteger('procedure_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('equipment_id')->nullable();
            $table->unsignedBigInteger('project_id')->nullable();
            $table->text('remarks');
            $table->timestamps();

            $table->foreign('alloy_id')->references('id')->on('alloys')->onDelete('set null');
            $table->foreign('substrate_id')->references('id')->on('substrates')->onDelete('set null');
            $table->foreign('support_id')->references('id')->on('supports')->onDelete('set null');
            $table->foreign('capillary_id')->references('id')->on('capillaries')->onDelete('set null');
            $table->foreign('procedure_id')->references('id')->on('procedures')->onDelete('set null');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
            $table->foreign('equipment_id')->references('id')->on('equipments')->onDelete('set null');
            $table->foreign('project_id')->references('id')->on('projects')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('samples');
    }
}
