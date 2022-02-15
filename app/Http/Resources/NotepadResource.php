<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class NotepadResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'fio'=>$this->fio,
            'company'=>$this->company,
            'phone'=>$this->phone,
            'email'=>$this->email,
            'born_date'=>$this->born_date,
            'foto'=>$this->foto
        ];
    }
}
