<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Debriefing extends Model
{
    protected $fillable = ['brief_id','commentaire'];

    public function brief() {
        return $this->belongsTo(Brief::class);
    }

    public function evaluation() {
        return $this->hasOne(Evaluation::class);
    }
}
