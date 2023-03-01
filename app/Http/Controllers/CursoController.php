<?php
//Para rutas derivadas de una, se puede usar un solo 
//controlador, para evitar usar más codigo 
namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    //a la ruta principal por convención se le pone index
    public function index(){
        //Mas recomendable usar paginate
        $cursos = Curso::orderBy('id','desc')->paginate();
        //para indicar un archivo dentro de una carpeta se usa .
        return view('cursos.index',compact('cursos'));
    }

    //al formulario create
    public function create(){
        return view('cursos.create');
    }

    public function store(Request $request){
        $curso = new Curso();
        $curso->name = $request->name;
        $curso->descripcion = $request->descripcion;
        $curso->categoria = $request->categoria;
        $curso->save();
        return redirect()->route('cursos.show',$curso);

    }
    //Mostrar elemento en particular de la ruta
    public function show($id){
        /*para pasar una variable en una vista, se debe de usar un array como
        segundo argumento indicando las variables.
        Pare ello, se pone el nombre de la variable 'var' que recibirá y con => se asigna la variable de 
        la cual recibira la información */
        $curso = Curso::find($id);
        return view('cursos.show',['curso' => $curso]);
    }

    public function edit(Curso $curso){
        return view('cursos.edit',compact('curso'));
    }

    public function update(Curso $curso, Request $request){
        $curso->name = $request->name;
        $curso->descripcion = $request->descripcion;
        $curso->categoria = $request->categoria;
        $curso->save();
        return redirect()->route('cursos.show',$curso);

    }
}
