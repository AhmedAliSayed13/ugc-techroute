<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('key');
            $table->integer('video_count');
            $table->float('total', 8, 2);
            $table->float('video_price', 8, 2);
            $table->boolean('shipping')->default(0);
            $table->boolean('paid')->default(0);
            $table->string('product_name')->nullable();
            $table->string('product_link')->nullable();
            $table->text('product_instructions')->nullable();
            $table->text('product_description')->nullable();
            $table->string('gender')->nullable();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('video_option_type_id')->constrained()->onDelete('cascade');
            $table->foreignId('video_option_duration_id')->constrained()->onDelete('cascade');
            $table->foreignId('video_option_aspect_id')->constrained()->onDelete('cascade');
            $table->integer('country_id')->nullable();
            // $table->integer('status')->nullable();
            $table->unsignedBigInteger('status')->nullable();
            $table->foreign('status')->references('id')->on('order_statuses')->onDelete('cascade');
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
        Schema::dropIfExists('orders');
    }
}
