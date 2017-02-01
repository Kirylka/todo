<?php namespace Kirylka\Todo\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
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
    protected $table = 'todo_tasks';

    /**
     * Get the project.
     */
    public function project()
    {
        return $this->belongsTo('Kirylka\Todo\Event\Project');
    }

}

