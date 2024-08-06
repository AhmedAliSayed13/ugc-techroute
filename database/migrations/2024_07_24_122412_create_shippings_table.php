<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShippingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shippings', function (Blueprint $table) {
            $table->id();
            $table->string('key')->nullable();
            $table->text('tracking')->nullable();
            $table->text('creator_address')->nullable();
            $table->boolean('active')->default(0);
            $table->unsignedBigInteger('task_id');
            $table->unsignedBigInteger('order_id');
            $table->foreign('task_id')->references('id')->on('tasks')->onDelete('cascade');
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
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
        Schema::dropIfExists('shippings');
    }
}
