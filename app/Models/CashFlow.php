<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class CashFlow extends Model
{
    use HasFactory, SoftDeletes;

    // Tambahkan baris ini agar data dari form tidak ditolak
    protected $fillable = ['date', 'type', 'category', 'item_details', 'amount', 'description'];
}