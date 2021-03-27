<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTodosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('todos', function (Blueprint $table) {
            // set table
            $table->id();
            $table->unsignedBigInteger('todo_list_id');
            $table->string('content', 150);
            $table->string('importance', 3)->nullable();
            $table->boolean('priority');
            $table->boolean('completed');
            $table->timestamps();

            // set relation
            $table->foreign('todo_list_id')
                ->references('id')
                ->on('todo_lists');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('todos');
    }
}