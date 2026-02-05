<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StratImg extends Model
{
    protected $fillable = [
        'strat_id',
        'floor',
        'img_path',
    ];

    // Relations
    public function strat()
    {
        return $this->belongsTo(Strat::class);
    }
}
