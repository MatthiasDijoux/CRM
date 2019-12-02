<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CommentairesRessource extends JsonResource
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
            'commentaire'=>$this->commentaire,
            'id_client'=>$client,
        ];
    }
}
