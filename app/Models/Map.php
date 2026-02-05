<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Map extends Model
{
    protected $fillable = [
        'game_id',
        'name',
        'img_top_view_path',
        'img_3_floor_path',
        'img_2_floor_path',
        'img_1_floor_path',
        'img_alt_text'      
    ];

    // Relations
    public function game()
    {
        return $this->belongsTo(Game::class);
    }
    public function strats()
    {
        return $this->hasMany(Strat::class);
    }
}
