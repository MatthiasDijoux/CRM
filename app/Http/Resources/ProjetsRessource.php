<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProjetsRessource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $client =  new ClientsRessource($this->whenLoaded('id'));

        return[
            'id' => $this->id,
            'nom'=>$this->nom,
            'id_client'=>$client,
        ];
    }
}
