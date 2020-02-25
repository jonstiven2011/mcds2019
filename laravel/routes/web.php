<?php

Route::get('/', function () {
    return view('Welcome');
});

Route::get('/helloword', function(){
    return dd('Hola Mundo Laravel');
});

Route::get('/helloword', function(){
    return '<h2>Hola Mundo</h2>';
});

//Automaticamente crea el controlador con todos sus componentes, ejemplo a continuación
//Route::resource('Article', 'ArticleController');
//resource: crea automaticamente todas las rutas
//Route::resource('Article', 'ArticleController');

//Any: Cualquier solicitud, sea /get, /post, /put, /delete
Route::any('show/articles', function () {
    $arts = App\Article::All();
    return dd($arts);
});

//View: Vista
Route::view('show/users','showusers',['users' => App\User::All()]);

//Con parametro
Route::any('show/user/{id}', function ($id) {
    $user = App\User::find($id);
    dd($user);
});

//Login de la pagina
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Ruta para llamar todos los campos
Route::resource('users', 'UserController');