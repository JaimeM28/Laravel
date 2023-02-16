<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //se declaran los métodos del controlador 
    //método invoke es para administrar una unica 
    //ruta 
    public function __invoke(){
         // return view('welcome');
    return "Holaaaa";
    }
}
