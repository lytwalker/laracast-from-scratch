<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    // Mass assignment protection - whitelists only these elements CAN be 'filled' (i.e. updated)
    protected $fillable = [
        'title',
        'description'
    ];

    // ...blacklists only these elements CANNOT be 'filled' (i.e. updated)
    //protected $guarded = [];


    // APPROACH 1 - This is how to associate 2 tables
    /* 
    - I prefer APPROACH 2 (as seen in the Task model) because I think it makes things more modular. 
    - The burden of association falls on this parent class/table.
    - If it's associated child class/table (i.e. Task) is deleted, this will break.
    - * YOU CAN DO BOTH APPROACHES *
    */
    public function tasks(){
        // -- In this case it means a "Project has many Tasks"
        return $this->hasMany(Task::class);
    }

    public function addTask($task){
        // first way of doing it
        /*return Task::create([
            'project_id' => $this->id,
            'description' => $description
            ]);*/

        // this is the more streamlined way of doing it
        return $this->tasks()->create($task);
    }
}