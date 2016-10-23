<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Output extends Model
{
    protected $fillable = [
      "lot_quantity", "unit_quantity"
    ];

    public function package()
    {
        return $this->belongsTo(Package::class);
    }
}
