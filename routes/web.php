<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\postController;
use App\Models\Posts;

Route::get('/', HomeController::class);

Route::get('/posts', [postController::class, 'index']);
Route::get('posts/create',[postController::class, 'create']);
Route::get('/posts/{post}', [postController::class, 'show']);

Route::get('prueba', function(){

    /*
    //crear nuevo posts
    $posts = new Post;

    $posts->title = 'Titulo de prueba 3';
    $posts->content = 'Contendo de prueba 3';
    $posts->categoria = 'Categoria de prueba 3';

    $posts->save();

    return $posts;
    */
    
    /*
    //Buscar registros
    $posts= Post::find(1); 

    //$posts = Post::where('title', 'Titulo prueba 1')->firsh(); --no me funciono

    //Actualizar registros
    $posts->categoria = 'Desarrollo web';
    $posts->save();

    return $posts;
    */
    /*
    //Listar registros posts
    $posts = Post::orderby('categoria','asc')
                    ->select('id','title','categoria')
                    ->take(2) //limitar cantidad de registros que quieres que te traiga
                    ->get();

    return $posts;
    */

    /*
    //Eliminar registro
    $posts= Post::find(1);

    $posts->delete();

    return 'Eliminado correctamente';
    */

});



/*Route::get('/posts/{post}/{category}',function($post, $category){
    return "Aqui se mostrara el post {$post} de la categoria {$category}";
});*/

//Tipos de peticiones:
//Get - peticiones relacionadas con la url o para direccionar a una pag
//Post - peticiones desde un formulario y que la info no se avisible
//Put - actualizar un registro
//Patch - actualizar un registro
//Delete -eliminar un registro