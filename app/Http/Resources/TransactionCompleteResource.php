<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TransactionCompleteResource extends JsonResource
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
            "daily_id" => $this->daily_id,
            "total_price" => $this->total_price,
            "finance_approved" => $this->finance_approved,
            "revision_requested" => $this->revision_requested,
            "revision_allowed" => $this->revision_allowed,
            "revision_note" => $this->revision_note,
            "customer" => $this->customer,
            "payments" => $this->payments,
            "cas" => $this->cas,
            "type" => $this->type,
        ];
    }
}
