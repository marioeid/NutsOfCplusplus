<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //
    public function posts()
    {
    return $this->belongsToMany(post::class);
    }
    public function getroutekeyname()
    {
        return 'name';
    }
   
}
