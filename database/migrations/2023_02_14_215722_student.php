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
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {

            $table->id();

            $table->string('name')->nullable(true);
            $table->string('matric')->unique();
            $table->string('level')->nullable(true);
            $table->boolean('status')->default(false);
            $table->string('image_path')->nullable(true);
            $table->string('email')->unique()->nullable(true);

            $table->string('password', 350)->nullable(true);

            $table->unsignedBigInteger('department_id')->nullable(true);

            $table->foreign('department_id')->references('id')->on('departments')->cascadeOnDelete()->cascadeOnUpdate();

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
        Schema::dropIfExists('students');
    }
};
