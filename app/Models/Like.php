<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $fillable = [
        'user_id',
        'strat_id',
    ];

    // Relations
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function strat()
    {
        return $this->belongsTo(Strat::class);
    }
}
