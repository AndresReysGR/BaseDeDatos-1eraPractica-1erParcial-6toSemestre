<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function (){
    return[
        'Clases' =>[
            'Notas',
            'Nombre de las notas',
            'Agregar notas',
            'Lista de notas',
            'Editar Notas',
        ]
    ];

});

Route::get ('notas', function(){
    return 'Aqui van las Notas';
});

Route::get ('notas/{id}', function($id){
    return 'Aqui se van los nombres de las notas: ' .$id;
});

Route::get ('notas/nombre/nuevaNota', function(){
    return 'Aqui se agrega nuevas notas';
});

Route::get ('notas/nombre/nuevaNota/enlistarnotas', function(){
    return 'Aqui se enlistarian todas los nombres de las notas';
});

Route::get ('notas/nombre/nuevaNota/enlistarnotas/editarnota', function(){
    return 'Aqui se editaran los nombres de las notas';
});

Route::get ('clases/{id}/editar', function($id){
    return 'Aqui se editan todas las clases id: ' .$id;
})->where('id', '\d+');
