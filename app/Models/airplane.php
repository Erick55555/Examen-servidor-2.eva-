<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class airplane extends Model
{
    use HasFactory;

    public function Flight()
    {
        return $this->belongsTo('App\Models\Flight');
    }
}
