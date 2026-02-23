<?php

namespace App\Models;


// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'classe_id'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    /*
    |--------------------------------------------------------------------------
    | Relations
    |--------------------------------------------------------------------------
    */

    // Student appartient à une classe
    public function classe()
    {
        return $this->belongsTo(classe::class);
    }

    // Teacher → plusieurs classes
    public function teachingClasses()
    {
        return $this->belongsToMany(Classe::class, 'classe_formateur');
    }

    // Student → plusieurs briefs
    public function briefs()
    {
        return $this->belongsToMany(Brief::class);
    }

    // Student → plusieurs evaluations
    public function evaluations()
    {
        return $this->hasMany(Evaluation::class, 'student_id');
    }

    // Helper
    public function isAdmin()
    {
        return $this->role === 'admin';
    }

    public function isTeacher()
    {
        return $this->role === 'teacher';
    }

    public function isStudent()
    {
        return $this->role === 'student';
    }
}
