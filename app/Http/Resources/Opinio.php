<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Opinio extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'usuari_id' => $this->usuari_id,
            'restaurant_id' => $this->restaurant_id,
            'comentari' => $this->comentari,
            'puntuacio' => $this->puntuacio,
        ];
    }
}
