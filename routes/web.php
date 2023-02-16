<?php

use Illuminate\Support\Facades\Route;
//se llama al controlador 
use App\Http\Controllers\HomeController;
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

Route::get('cursos', function(){
   
});

//ruta estatica, debe ir antes de una con variable 
Route::get('cursos/create', function(){
   
});


//Creación de ruta con variable, se pone entre corchetes en url
//y luego la función anonima recibe la variable 
Route::get('cursos/{curso}', function($curso){
   
});

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




