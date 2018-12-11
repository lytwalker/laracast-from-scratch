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

}
