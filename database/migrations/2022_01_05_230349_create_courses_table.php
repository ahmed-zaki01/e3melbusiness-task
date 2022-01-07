<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->foreignId('category_id')->nullable()->references('id')->on('categories')->onDelete('SET NULL');
            $table->string('name', 60)->unique();
            $table->text('description');
            $table->tinyInteger('hours');
            $table->boolean('active')->default(1);
            $table->enum('level', ['beginner', 'intermediate', 'high']);
            $table->tinyInteger('views')->nullable()->default(0);
            $table->tinyInteger('rating')->nullable()->default(0);
            $table->string('image')->nullable()->default('default.jpg');
            $table->timestamps();
            $table->softDeletes();
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
