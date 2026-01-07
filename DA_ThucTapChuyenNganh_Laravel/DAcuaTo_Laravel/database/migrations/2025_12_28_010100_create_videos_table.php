<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideosTable extends Migration
{
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->nullable();
            $table->string('image')->nullable();
            $table->string('video')->nullable();
            $table->text('content')->nullable();
            $table->text('description')->nullable();
            $table->unsignedBigInteger('idtopic')->nullable();
            $table->decimal('price', 12, 2)->nullable();
            $table->tinyInteger('status')->default(1);
            $table->timestamps();

            $table->foreign('idtopic')->references('id')->on('topics')->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::dropIfExists('videos');
    }
}
