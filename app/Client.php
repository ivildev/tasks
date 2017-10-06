<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public function tasks()
    {

        return $this->hasMany('App\Task');

    }

    public function users() {

        return $this->belongsTo('App\User');

    }
}
