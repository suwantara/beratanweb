<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
        'name',
        'email',
        'subject',
        'message',
        'read_at'
    ];

    protected $dates = [
        'read_at'
    ];

    public function scopeUnread($query)
    {
        return $query->whereNull('read_at');
    }
}
