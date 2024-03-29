<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ReportRitResource extends JsonResource
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
            "tonnage_left" => $this->tonnage_left,
            "tonnage_sold" => $this->tonnage_sold,
            "tonnage_sold_price" => $this->tonnage_sold_price,
            "real_tonnage" => $this->real_tonnage,
            "total_tonnage_sold" => $this->total_tonnage_sold,
            "rit" => [
                "item" => ["code" => $this->rit->item->code],
                "arrival_date" => $this->rit->arrival_date
            ],
            "report_id" => $this->report_id
        ];
    }
}
