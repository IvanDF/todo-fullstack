<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    public function TodoList()
    {
        return $this->belogsTo('App\TodoList');
    }
}
