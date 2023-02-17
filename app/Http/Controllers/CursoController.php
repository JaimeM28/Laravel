<?php
//Para rutas derivadas de una, se puede usar un solo 
//controlador, para evitar usar más codigo 
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    //a la ruta principal por convención se le pone index
    public function index(){
        //para indicar un archivo dentro de una carpeta se usa .
        return view('cursos.index');
    }

    //al formulario create
    public function create(){
        return view('cursos.create');
    }
    //Mostrar elemento en particular de la ruta
    public function show($curso){
        /*para pasar una variable en una vista, se debe de usar un array como
        segundo argumento indicando las variables.
        Pare ello, se pone el nombre de la variable 'var' que recibirá y con => se asigna la variable de 
        la cual recibira la información */
        return view('cursos.show',['curso' => $curso]);
    }
}
