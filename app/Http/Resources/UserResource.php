<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use App\Model\User;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->getKey(),
            'name' => $this->name,
            'lastname' => $this->lastname,
            'email' => $this->email,
        ];
    }
}
