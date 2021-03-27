<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\TodoList;
use App\Todo;

class TodosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $todoLists = TodoList::all();

        foreach ($todoLists as $todoList) {
            for ($i = 0; $i < 10; $i++) { 
    
                $newTodo = new Todo();
                // populating todos
                $newTodo->todo_list_id = $todoList->id;
                $newTodo->content = $faker->sentence(5);
                $newTodo->importance = $faker->randomElement(['!', '!!', '!!!']);
                $newTodo->priority = $faker->boolean();
                $newTodo->completed = $faker->boolean();
    
                $newTodo->save();
            }
        }
    }
}
