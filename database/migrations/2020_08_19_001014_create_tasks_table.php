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
        Schema::create('tasks', function (Blueprint $table) {
            $table->integer('task_id');
            $table->primary('task_id');
            $table->string('task_name');
            $table->integer('pid');
            $table->foreign('pid')
            ->references('project_id')->on('projects')
             ->onDelete('cascade');
            $table->integer('uid');
            $table->foreign('uid')
            ->references('user_id')->on('users')
            ->onDelete('cascade');

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
        Schema::dropIfExists('tasks');
    }
}
