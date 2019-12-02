<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ClientsRessource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {

        $adresse =  new AdressesRessource($this->whenLoaded('adresse'));
        $contact =  ContactsRessource::collection($this->whenLoaded('contacts'));
        return[
            'id' => $this->id,
            'nom'=>$this->nom,
            'adresse'=>$adresse,
            'contacts'=>$contact
        ];
    }
}
