<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    protected $fillable = ['order_id', 'name', 'program', 'amount', 'status', 'snap_token'];
}
