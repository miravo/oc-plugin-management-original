<?php namespace Eduzoneco\Management\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateEduzonecoManagementCoursesLessons extends Migration
{
    public function up()
    {
        Schema::create('eduzoneco_management_courses_lessons', function($table)
        {
            $table->integer('course_id')->unsigned();
            $table->integer('lesson_id')->unsigned();
            $table->primary(['course_id', 'lesson_id'], 'course_lesson');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('eduzoneco_management_courses_lessons');
    }
}
