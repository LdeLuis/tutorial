<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\postController;


Route::get('/', HomeController::class);

Route::get('/posts', [postController::class, 'index']);
Route::get('posts/create',[postController::class, 'create']);
Route::get('/posts/{post}', [postController::class, 'show']);



/*Route::get('/posts/{post}/{category}',function($post, $category){
    return "Aqui se mostrara el post {$post} de la categoria {$category}";
});*/

//Tipos de peticiones:
//Get - peticiones relacionadas con la url o para direccionar a una pag
//Post - peticiones desde un formulario y que la info no se avisible
//Put - actualizar un registro
//Patch - actualizar un registro
//Delete -eliminar un registro