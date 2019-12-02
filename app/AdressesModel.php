<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdressesModel extends Model
{
    protected $table = 'adresses';
    protected $fillable = ['adresse','code_postal','ville'];
    public function adresse()
    {
        return $this->belongsTo('App\ClientsModel', 'id');
    }
}
