<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TransactionResource extends JsonResource
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
            "tb" => $this->tb,
            "tw" => $this->tw,
            "thr" => $this->thr,
            "sack" => $this->sack,
            "sack_price" => $this->sack_price,
            "item_price" => $this->item_price,
            "discount" => $this->discount,
            "ongkir" => $this->ongkir,
            "total_price" => $this->total_price,
            "settled_date" => $this->settled_date,
            "owner_approved" => $this->owner_approved,
            "finance_approved" => $this->finance_approved,
            "customer" => $this->customer,
            "trip" => $this->trip,
            "rits" => $this->rits,
            "savings" => $this->savings,
        ];
    }
}
