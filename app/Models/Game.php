<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = [
        'game_name',
        'game_logo_path'
    ];

    // Relations
    public function updates()
    {
        return $this->hasMany(Update::class);
    }
    public function maps()
    {
        return $this->hasMany(Map::class);
    }
    public function gadgets()
    {
        return $this->hasMany(Gadget::class);
    }
    public function operators()
    {
        return $this->hasMany(Operator::class);
    }
    public function strats()
    {
        return $this->hasMany(Strat::class);
    }
    public function weapons()
    {
        return $this->hasMany(Weapon::class);
    }
}
