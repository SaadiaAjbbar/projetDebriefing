<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Debriefing extends Model
{
    use HasFactory;

    protected $fillable = [
        'brief_id',
        'date'
    ];

    public function brief()
    {
        return $this->belongsTo(Brief::class);
    }

    public function evaluations()
    {
        return $this->hasMany(Evaluation::class);
    }
}
