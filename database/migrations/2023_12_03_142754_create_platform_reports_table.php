<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlatformReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('platform_reports', function (Blueprint $table) {
            $table->id();
            $table->date('day');
            $table->unsignedBigInteger('platform_id');
            $table->unsignedBigInteger('platform_account_id');
            $table->integer('posts');
            $table->integer('total_posts')->default(0);
            $table->integer('before')->default(0);
            $table->integer('after')->default(0);
            $table->integer('difference')->default(0);
            
            $table->foreign('platform_id')->references('id')->on('platforms');
            $table->foreign('platform_account_id')->references('id')->on('platform_accounts');

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
        Schema::dropIfExists('platform_reports');
    }
}
