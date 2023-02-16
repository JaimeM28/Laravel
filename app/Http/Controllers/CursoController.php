<?php
//Para rutas derivadas de una, se puede usar un solo 
//controlador, para evitar usar más codigo 
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    //a la ruta principal por convención se le pone index
    public function index(){
        return "Bienvenido a la pagina curso";
    }

    //al formulario create
    public function create(){
        return "Crear curso ";
    }
    //Mostrar elemento en particular de la ruta
    public function show(){
        return "bienvenido al $curso";
    }
}
