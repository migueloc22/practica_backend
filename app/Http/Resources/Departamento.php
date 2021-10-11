<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Departamento extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);
    }


    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray2($request)
    {
        return [
            'id' => $this->id,
            'departamento' => $this->departamento,
        ];
    }

    
}
