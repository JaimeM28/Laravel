<?php

use Illuminate\Support\Facades\Route;
//se llama al controlador del Home
use App\Http\Controllers\HomeController;
// se llama al controlador de cursos 
use App\Http\Controllers\CursoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//LLamando al controlador 
Route::get('/', HomeController::class);

//para usar metodo especifico de la ruta, se usa un array
// el segundo elemento es la función a usar 
Route::get('cursos', [CursoController::class, 'index']);

//ruta estatica, debe ir antes de una con variable 
Route::get('cursos/create', [CursoController::class,'create']);


//Creación de ruta con variable, se pone entre corchetes en url
//y luego la función anonima recibe la variable 
Route::get('cursos/{curso}', [CursoController::class, 'show']);

// //ruta con dos variables 
// Route::get('cursos/{curso}/{categoria}', function ($curso, $categoria) {
//     return "bienvenido al $curso de la categoria $categoria";
// });

//Si se añade signo de interrogación, será opcional. Se debe inicializar la variable opcional
//en null 
// Route::get('cursos/{curso}/{categoria?}', function ($curso, $categoria=null) {
//     if($categoria){
//         return "bienvenido al $curso de la categoria $categoria";
//     }else {
//         return "Bienvenido al curso: $curso";
//     }
   
// });




