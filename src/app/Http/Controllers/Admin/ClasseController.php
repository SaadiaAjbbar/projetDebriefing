<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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

 public function edit(Classe $class)
 {
    return view('admin.classes.edit', ['classe' => $class]);
 }
    public function store(Request $request)
 {
    $request->validate([
        'name' => 'required',
        'annee_scolaire' => 'required'
    ]);

    Classe::create([
        'name' => $request->name,
        'annee_scolaire' => $request->annee_scolaire
    ]);

    return redirect()->route('admin.classes.index');
 }




    public function update(Request $request, string $id)
    {
        //
    }


    public function destroy(string $id)
    {
        //
    }
}
