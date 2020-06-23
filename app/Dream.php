<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dream extends Model
{
    protected $fillable = ['title','body'];

    public function path(){
        return route('dreams.show', $this);
    }
};

