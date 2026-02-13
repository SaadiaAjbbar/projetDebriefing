<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Competence extends Model
{
    protected $fillable = ['code', 'libelle'];

    public function briefs() {
        return $this->belongsToMany(Brief::class);
    }

    public function evaluations() {
        return $this->hasMany(Evaluation::class);
    }
}
