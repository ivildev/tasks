<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function projects() {

        return $this->belongsTo('App\Project');

    }

    public function clients() {

        return $this->belongsTo('App\Client');

    }

    public function categories() {

        return $this->belongsTo('App\Category');

    }

    public function users() {

        return $this->belongsTo('App\User');

    }

    public function activities()
    {

        return $this->hasMany('App\Activity');

    }
}
