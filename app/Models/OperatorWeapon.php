<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OperatorWeapon extends Model
{
    protected $fillable = [
        'operator_id',
        'weapon_id',
    ];

    // Relations
    public function operator()
    {
        return $this->belongsTo(Operator::class);
    }
    public function weapon()
    {
        return $this->belongsTo(Weapon::class);
    }
}
