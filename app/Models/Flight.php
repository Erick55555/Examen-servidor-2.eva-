<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;

    public function airplane()
    {
        return $this->hasMany('App/Models/airplane');
    }

    public function users()
    {
        return $this->belongsToMany('App\Models\User')->withTimestamps();
    }
}
