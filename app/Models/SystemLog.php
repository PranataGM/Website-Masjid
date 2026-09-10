<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;

class SystemLog extends Model
{
    protected $fillable = ['user_id', 'action', 'description', 'ip_address', 'user_agent'];

    public static function log($action, $description = null)
    {
        self::create([
            'user_id' => auth()->id(),
            'action' => $action,
            'description' => $description,
            'ip_address' => Request::ip(),
            'user_agent' => Request::userAgent(),
        ]);
    }
}
