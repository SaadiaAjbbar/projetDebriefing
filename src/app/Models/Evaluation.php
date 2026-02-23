<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'competance_id',
        'debriefing_id',
        'level'
    ];

    public function student()
    {
        return $this->belongsTo(User::class, 'student_id');
    }

    public function competance()
    {
        return $this->belongsTo(Competance::class);
    }

    public function debriefing()
    {
        return $this->belongsTo(Debriefing::class);
    }
}
