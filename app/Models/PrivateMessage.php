<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PrivateMessage extends Model
{
    protected $fillable = [
        'user_id',
        'chat_id',
        'message',
    ];
    // Relations
    public function chat()
    {
        return $this->belongsTo(PrivateChat::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
