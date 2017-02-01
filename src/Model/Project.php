<?php namespace Kirylka\Todo\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{

    use SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'todo_projects';

    /**
     * Get the tasks for the project.
     */
    public function tasks()
    {
        return $this->hasMany('Kirylka\Todo\Event\Task');
    }

}

