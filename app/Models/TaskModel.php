<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TaskModel extends Model
{
    protected $table = 'task_models';
    protected $fillable = ['name', 'title', 'description','created_at', 'updated_at'];
}
