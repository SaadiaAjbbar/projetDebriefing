<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brief extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'sprint_id'];

    public function sprint()
    {
        return $this->belongsTo(Sprint::class);
    }

    public function competances()
    {
        return $this->belongsToMany(Competance::class);
    }

    public function students()
    {
        return $this->belongsToMany(User::class);
    }

    public function debriefings()
    {
        return $this->hasMany(Debriefing::class);
    }
}
