<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GroupMessages extends Model
{
    protected $fillable = [
        'user_id', 
        'group_id', 
        'message_content',
    ];
    
    
    // Relations
    public function group()
    {
        return $this->belongsTo(Group::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
