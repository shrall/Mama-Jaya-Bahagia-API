<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TripBranchResource extends JsonResource
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
            "allowance" => $this->allowance,
            "toll" => $this->toll,
            "gas" => $this->gas,
            "note" => $this->note,
            "toll_used" => $this->toll_used,
            "branch_to_main_tonnage" => $this->branch_to_main_tonnage,
            "finance_approved" => $this->finance_approved,
            "vehicle" => $this->vehicle,
            "branches" => RitBranchSuratJalanResource::collection($this->branches),
            "plate_number" => $this->plate_number
        ];
    }
}
