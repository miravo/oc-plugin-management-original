<?php namespace Eduzoneco\Management\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateEduzonecoManagementCoursestatuses extends Migration
{
    public function up()
{
    Schema::create('eduzoneco_management_coursestatuses', function($table)
    {
        $table->engine = 'InnoDB';
        $table->increments('id')->unsigned();
        $table->text('name_en')->nullable();
        $table->text('description_en')->nullable();
        $table->text('name_es')->nullable();
        $table->text('description_es')->nullable();
        $table->text('hex_code')->nullable();
        $table->timestamp('created_at')->nullable();
        $table->timestamp('updated_at')->nullable();
        $table->timestamp('deleted_at')->nullable();
    });
}

public function down()
{
    Schema::dropIfExists('eduzoneco_management_coursestatuses');
}
}
