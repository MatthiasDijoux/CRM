<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommentairesModel extends Model
{
    protected $table = 'commentaires_clients';

    public function commentaires_clients()
    {
        return $this->hasMany('App\clients');
    }
    public function typeCommentaires()
    {
        return $this->hasMany('App\typesCommentaires');
    }
}
