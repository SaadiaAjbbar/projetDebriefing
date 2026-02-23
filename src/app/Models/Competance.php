<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competance extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description'];

    public function briefs()
    {
        return $this->belongsToMany(Brief::class);
    }

    public function evaluations()
    {
        return $this->hasMany(Evaluation::class);
    }
}
