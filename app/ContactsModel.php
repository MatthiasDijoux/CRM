<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactsModel extends Model
{
    protected $table = 'contacts';
    protected $fillable = ['nom','prenom','tel','email','poste','id_client'];
/*     protected $primaryKey = 'id';
 */
    public function clients()
    {
        return $this->belongsTo(ClientsModel::class, 'id');
    }
}
