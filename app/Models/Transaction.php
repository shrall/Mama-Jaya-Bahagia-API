<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $fillable = [
        "daily_id",
        "tb",
        "tw",
        "thr",
        "sack",
        "sack_free",
        "sack_price",
        "other",
        "item_price",
        "discount",
        "ongkir",
        "total_price",
        "settled_date",
        "owner_approved",
        "finance_approved",
        "revision_requested",
        "revision_allowed",
        "revision_note",
        "customer_id", "cas_id",
        "trip_id",
        "type",
        "created_at"
    ];
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id', 'id');
    }
    public function cas()
    {
        return $this->belongsTo(Cas::class, 'cas_id', 'id');
    }
    public function trip()
    {
        return $this->belongsTo(Trip::class, 'trip_id', 'id');
    }
    public function savings()
    {
        return $this->hasOne(Saving::class, 'transaction_id', 'id');
    }
    public function rits()
    {
        return $this->hasMany(RitTransaction::class, 'transaction_id', 'id');
    }
    public function payments()
    {
        return $this->hasMany(Payment::class, 'transaction_id', 'id');
    }
}
