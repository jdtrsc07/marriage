<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class GroomResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            // 'id' => $this->id,
            'user_id' => $this->user_id,
            'lastname' => $this->lastname,
            'firstname' => $this->firstname,
            // Exclude middlename field
            'middlename' => $this->middlename,
        ];
    }
}
