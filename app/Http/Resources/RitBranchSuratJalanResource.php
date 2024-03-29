<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class RitBranchSuratJalanResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id" => $this->id,
            "created_at" => $this->created_at,
            "name" => $this->name,
            "address" => $this->address,
            "sent_tonnage" => $this->sent_tonnage,
            "income" => $this->income,
            "delivery_date" => $this->delivery_date,
            "rit" => ["item" => ["code" => $this->rit->item->code]]
        ];
    }
}
