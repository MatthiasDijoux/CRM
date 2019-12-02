<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeCommentairesModel extends Model
{
    protected $table = 'type_commentaires_clients';

    public function type_commentaires_client()
    {
        return $this->belongsTo('App\commentaires');
    }
}
