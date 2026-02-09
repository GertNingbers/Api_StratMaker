<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gadget extends Model
{
    protected $fillable = [
        'game_id',
        'name',
        'description',
        'img_gadget_path',
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
