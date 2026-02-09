<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Operator extends Model
{
   protected $fillable = [
        'game_id',
        'name',
        'side',
        'speed',
        'armor',
        'country',
        'affiliation',
        'release_date',
        'img_op_logo_path',
        'img_op_full_path',
        'img_op_ability_path',
        'op_ability_desc',
    ];

    // Relations
    public function game()
    {
        return $this->belongsTo(Game::class);
    }
    public function gadgets()
    {
        return $this->belongsToMany(Gadget::class);
    }
    public function weapons()
    {
        return $this->belongsToMany(Weapon::class);
    }
}
