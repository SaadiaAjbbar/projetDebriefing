<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Classe;
use App\Models\Sprint;
use App\Models\Brief;
use App\Models\User;
use App\Models\Competence;

class AdminDashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [
            'classesCount'     => Classe::count(),
            'sprintsCount'     => Sprint::count(),
            'briefsCount'      => Brief::count(),
            'formateursCount'  => User::where('role', 'formateur')->count(),
            'etudiantsCount'   => User::where('role', 'etudiant')->count(),
            'competencesCount' => Competence::count(),
        ]);
    }
}
