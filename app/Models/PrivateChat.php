<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PrivateChat extends Model
{
   // Relations
    public function users()
    {
        return $this->belongsToMany(User::class,);
    }

    public function messages()
    {
        return $this->hasMany(PrivateMessage::class);
    }
}
