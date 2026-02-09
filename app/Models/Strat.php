<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Strat extends Model
{
    protected $fillable = [
        'user_id',
        'group_id',
        'game_id',
        'map_id',
        'views',
        'name',
        'disscription',
        'status',
        'side',
    ];

    // Relations
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function group()
    {
        return $this->belongsTo(Group::class);
    }
    public function game()
    {
        return $this->belongsTo(Game::class);
    }
    public function map()
    {
        return $this->belongsTo(Map::class);
    }
    public function stratimg()
    {
        return $this->hasMany(StratImg::class);
    }
    public function likes()
    {
        return $this->hasMany(Like::class);
    }

}
