<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\TodoList;

class TodoListsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $todoLists = [
            'Lavoro',
            'Casa'
        ];

        foreach ($todoLists as $todoList) {
            $newTodoList = new TodoList();
            // populating todolists
            $newTodoList->name = $todoList;
            $newTodoList->save();
        }
    }
}
