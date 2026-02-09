<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Weapon extends Model
{
    protected $fillable = [
        'game_id',
        'name',
        'type',
        'damage',
        'fire_rate',
        'img_weapon_path',
    ];

    // Relations
    public function game()
    {
        return $this->belongsTo(Game::class);
    }
    public function operators()
    {
        return $this->belongsToMany(Operator::class);
    }
}
