<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dogs', function (Blueprint $table) {
            $table->id();
            $table->char('name', 50);
            $table->tinyInteger('age');
            $table->char('genre', 1);
            $table->char('chip_number', 50);
            $table->char('race', 50);
            $table->char('post_title', 100)->nullable();
            $table->char('image')->nullable();
            $table->char('size', 1)->nullable();
            $table->boolean('adopted');
            $table->text('description')->nullable();
            $table->string('particular_sign', 50)->nullable();
            $table->date('check_in');
            $table->date('check_out');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dogs');
    }
}
