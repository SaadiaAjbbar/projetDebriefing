<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sprint extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function classes()
    {
        return $this->belongsToMany(Classe::class);
    }

    public function briefs()
    {
        return $this->hasMany(Brief::class);
    }
}
