<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quizzes', function (Blueprint $table) {

            $table->id();
            $table->unsignedBigInteger('course_id');

            $table->string('title');
            $table->unsignedBigInteger('duration');
            $table->string('type');
            $table->date('date');

            $table->unsignedInteger('no_options');
            $table->unsignedInteger('no_questions');
            $table->unsignedInteger('no_answerable_questions');


            $table->foreign('course_id')->references('id')->on('courses')->cascadeOnDelete()->cascadeOnUpdate();

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
        Schema::dropIfExists('quizzes');
    }
};
