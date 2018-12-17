<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'project_id',
        'description',
        'completed'
    ];

    // APPROACH 2 - This is another way to associate 2 tables
    /* 
    - I prefer this way because I think it makes this class more modular.
    - The burden of association falls on this child class/table.
    - This class can be deleted entirely without affecting it's associated table (i.e. Project).
    - But if Project is deleted, this class will break.
    - It makes referencing desired project tasks from views in the MVC.
    - * YOU CAN DO BOTH APPROACHES *
    */
    public function project(){
        // -- In this case it means "Tasks belong to (a) Project"
        return $this->belongsTo(Project::class);
    }
}
