<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public function pets()
    {
        return $this->hasMany('App\Pet');
    }

    public function visits()
    {
        return $this->hasMany('App\Visit');
    }
}
