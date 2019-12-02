<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjetsModel extends Model
{
    protected $table = 'projets';

    public function projets()
    {
        return $this->hasMany('App\clients');
    }
}
