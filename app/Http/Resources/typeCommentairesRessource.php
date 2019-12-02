<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class typeCommentairesRessource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $commentaire =  new CommentairesRessource($this->whenLoaded('id'));

        return[
            'id' => $this->id,
            'type'=>$this->type,
            'id_commentaire'=>$commentaire,
        ];
    }
}
