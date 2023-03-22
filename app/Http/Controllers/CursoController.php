<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        $cursos = Curso::OrderBy('id','desc')->paginate();
        return view('cursos.index', (compact('cursos')));
    }


    public function create()
    {
        return view('cursos.create');
    }


    public function store(Request $request)// -->INFO Cualquier informacion q se mande por el formulario va a ser almacenada en el objeto $request
    {
        $request->validate([
            'name' => 'required|max:10',
            'descripcion' => 'required|max:30',
            'categoria' => 'required'
        ]);

        $curso = new Curso();
        $curso->name = $request->name;
        $curso->descripcion = $request->descripcion;
        $curso->categoria = $request->categoria;
        $curso->save();
        return redirect()->route('cursos.show', $curso);
    }


    public function show(Curso $curso)
    {
        return view('cursos.show', (compact('curso')));
    }

    public function edit(Curso $curso)
    {
        return view('cursos.edit',compact('curso'));
    }

    public function update(Request $request, Curso $curso)
    {
        $request->validate([
            'name' => 'required',
            'descripcion' => 'required',
            'categoria' => 'required'
        ]);

        $curso->name = $request->name;
        $curso->descripcion = $request->descripcion;
        $curso->categoria = $request->categoria; 
        $curso->save();
        return redirect()->route('cursos.show', $curso);
    }

    public function destroy(Curso $curso)
    {
        $curso->delete();

        return redirect()->route('cursos.index');
    }
}
