<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('todo_tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->text('content');
            $table->timestamps();
            $table->unsignedInteger('project_id');
            $table->foreign('project_id')
                ->references('id')->on('todo_projects')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('todo_tasks', function (Blueprint $table) {
            $table->dropForeign('todo_tasks_project_id_foreign');
            $table->drop();
        });
    }
}
