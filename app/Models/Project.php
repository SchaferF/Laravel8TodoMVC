<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    //eager loading
    protected $with = ['tasks'];

    public function tasks()
    {
        return $this->hasMany('App\Models\Task');
    }
}
