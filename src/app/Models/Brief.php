<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brief extends Model
{
    protected $fillable = ['titre', 'description', 'duree', 'type', 'sprint_id'];

    public function sprint()
    {
        return $this->belongsTo(Sprint::class);
    }

    public function competences()
    {
        return $this->belongsToMany(Competence::class);
    }

    public function etudiants()
    {
        return $this->belongsToMany(User::class, 'brief_etudiant');
    }

    public function debriefings()
    {
        return $this->hasMany(Debriefing::class);
    }
}
