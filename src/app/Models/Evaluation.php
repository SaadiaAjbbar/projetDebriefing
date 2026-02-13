<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    protected $fillable = ['competence_id','debriefing_id','etudiant_id','niveau'];

    public function competence() {
        return $this->belongsTo(Competence::class);
    }

    public function debriefing() {
        return $this->belongsTo(Debriefing::class);
    }

    public function etudiant() {
        return $this->belongsTo(User::class);
    }
}

