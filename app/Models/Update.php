<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Update extends Model
{
    protected $fillable = [
        'game_id',
        'name',
        'description',
        'img_update',
    ];

    // Relations
    public function game()
    {
        return $this->belongsTo(Game::class);
    }
}
