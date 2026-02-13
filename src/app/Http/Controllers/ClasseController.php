<?php
namespace App\Http\Controllers;

use App\Models\Classe;
use Illuminate\Http\Request;

class ClasseController extends Controller
{
    public function index()
    {
        $classes = Classe::all();
        return view('admin.classes.index', compact('classes'));
    }

    public function create()
    {
        return view('admin.classes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'annee_scolaire' => 'required',
        ]);

        Classe::create($request->all());

        return redirect()->route('classes.index')
                         ->with('success', 'Classe ajoutée avec succès');
    }
}
