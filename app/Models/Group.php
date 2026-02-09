<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = ['name', 'profile_img'];

    // Relations
    public function strats()
    {
        return $this->hasMany(Strat::class);
    }
    public function groupmessage()
    {
        return $this->hasMany(GroupMessage::class);
    }
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
    public function requests()
    {
        return $this->hasMany(Request::class);
    }

}
