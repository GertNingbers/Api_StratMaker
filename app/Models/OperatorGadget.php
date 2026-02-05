<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OperatorGadget extends Model
{
    protected $fillable = [
        'operator_id',
        'gadget_id',
    ];

    // Relations
    public function operator()
    {
        return $this->belongsTo(Operator::class);
    }
    public function gadget()
    {
        return $this->belongsTo(Gadget::class);
    }
}
