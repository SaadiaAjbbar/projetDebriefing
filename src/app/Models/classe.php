<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Classe extends Model
{
    protected $fillable = ['nom', 'annee_scolaire'];

    public function sprints() {
        return $this->belongsToMany(Sprint::class);
    }

    public function etudiants() {
        return $this->hasMany(User::class)->where('role', 'etudiant');
    }

    public function formateurs() {
        return $this->belongsToMany(User::class, 'classe_formateur');
    }
}
