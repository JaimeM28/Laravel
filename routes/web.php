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

/* Las rutas se pueden agrupar, para reducir codigo y llevar una manejo, mediante group.
Se define una función (Controller) que usará al controlador y dentro del parentesis se pone el nombre del controlador a utilizar 
*/ 

Route::controller(CursoController::class)->group(function () {
    //Unicamente se llama el método del controlador 
    
    ///con el método name se le da un nombre a la ruta 
    Route::get('cursos', 'index')->name('cursos.index');
    Route::get('cursos/create', 'create')->name('cursos.create');
    Route::get('cursos/{curso}', 'show')->name('cursos.show');
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




