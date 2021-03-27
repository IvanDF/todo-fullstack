<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TodoList extends Model
{
    // remove timestamps
    public $timestamps = false;

    // set relation
    public function Todos()
    {
        return $this->hasMany('App\Todo');
    }
}
