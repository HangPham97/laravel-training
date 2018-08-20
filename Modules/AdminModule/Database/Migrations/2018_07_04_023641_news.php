<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class News extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('news',function(Blueprint $table){
           $table->string('news_id')->unique();;
           $table->string('title')->nullable();
           $table->string('sample',10000)->nullable();
           $table->string('content',10000)->nullable();
           $table->string('image',200);
           $table->integer('view')->nullable();
           $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
