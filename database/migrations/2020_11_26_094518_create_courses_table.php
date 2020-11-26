<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->bigIncrements('id');
            // $table->integer('user_id')->unsigned();
            $table->string('name');
            $table->integer('score')->nullable();
            $table->integer('status')->nullable(); # 1 - active, 2 - archived, 3 - available
            $table->string('lecturer')->nullable(); #lecturer id
            $table->integer('max_credit');
            $table->integer('credit')->nullable();
            $table->string('requirement')->nullable();
            $table->integer('week_day')->nullable();
            $table->integer('hour')->nullable(); # 'room', 'link', 'group'
            $table->string('room')->nullable();
            $table->string('link')->nullable();
            $table->integer('group')->nullable();

            $table->timestamps();

            // $table->index('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
