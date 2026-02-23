<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    use HasFactory;

    protected $fillable = ['name','annee_scolaire'];

    public function students()
    {
        return $this->hasMany(User::class);
    }

    public function formateurs()
    {
        return $this->belongsToMany(User::class, 'classe_formateur');
    }

    public function sprints()
    {
        return $this->belongsToMany(Sprint::class);
    }
}
