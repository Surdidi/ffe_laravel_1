<?php

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

Route::get('/','ControlPage@connexion');
Route::post('/','ControlPage@verif_id');
Route::get('/acceuil','ControlPage@accueil'->middleware(accueil));

route::get('salut',function(){
  return 'test';
});

route::get('salut/{name}',function($name){
  return "bonjour $name";
});
