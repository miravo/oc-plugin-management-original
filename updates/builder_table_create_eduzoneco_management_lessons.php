<?php namespace Eduzoneco\Management\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateEduzonecoManagementLessons extends Migration
{
    public function up()
{
    Schema::create('eduzoneco_management_lessons', function($table)
    {
        $table->engine = 'InnoDB';
        $table->increments('id')->unsigned();
        $table->text('title_en')->nullable();
        $table->text('description_en')->nullable();
        $table->text('content_en')->nullable();
        $table->text('title_es')->nullable();
        $table->text('description_es')->nullable();
        $table->text('content_es')->nullable();
        $table->integer('duration')->nullable();
        $table->integer('lessonstatus_id')->nullable();
        $table->timestamp('created_at')->nullable();
        $table->timestamp('updated_at')->nullable();
        $table->timestamp('deleted_at')->nullable();
    });
}

public function down()
{
    Schema::dropIfExists('eduzoneco_management_lessons');
}
}
