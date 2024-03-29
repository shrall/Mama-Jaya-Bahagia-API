<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;
    protected $fillable = [
        "money",
        "income",
        "real_income",
        "expense",
        "tonnage",
        "item_income",
        "tb_income",
        "tw_income",
        "thr_income",
        "other_income",
        "tb_expense",
        "tw_expense",
        "thr_expense",
        "salary_expense",
        "operational_expense",
        "created_at"
    ];
    public function rits()
    {
        return $this->hasMany(ReportRit::class, 'report_id', 'id');
    }
    public function transactions()
    {
        return $this->hasMany(ReportTransaction::class, 'report_id', 'id');
    }
}
