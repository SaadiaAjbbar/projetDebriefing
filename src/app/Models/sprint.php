<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sprint extends Model
{
    protected $fillable = ['nom', 'duree', 'ordre_chronologique'];

    public function classes() {
        return $this->belongsToMany(Classe::class);
    }

    public function briefs() {
        return $this->hasMany(Brief::class);
    }
}
