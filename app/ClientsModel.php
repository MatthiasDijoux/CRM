<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientsModel extends Model
{
    protected $table = 'clients';
/*     protected $primaryKey = 'id';
 */
public $timestamps = false;

    public function contacts()
    {
        return $this->hasMany(ContactsModel::class, 'id_client');
    }
    public function adresse()
    {
        return $this->belongsTo(AdressesModel::class, 'id_adresses');
    }
    public function commentaires_client()
    {
        return $this->belongsTo('App\Commentaires');
    }
    public function projet()
    {
        return $this->belongsTo('App\Projets');
    }

}
