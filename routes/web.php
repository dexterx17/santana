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

Route::get('/', 'Front@index')->name('landing');
Route::get('/template/{opcion}', 'Front@templates')->name('template');

Route::get('template',function(){
	return view('base');
});


Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){

	Route::get('/','Admin@dashboard')->name('admin');

	Route::resource('usuarios','Usuarios');
	Route::post('usuarios/{id}','Usuarios@update')->name('usuarios.update');
	
	Route::resource('clientes','Clientes');
	Route::post('clientes/{id}','Clientes@update')->name('clientes.update');
	
	Route::resource('trabajos','Trabajos');
	Route::post('trabajos/{id}','Trabajos@update')->name('trabajos.update');
	
	Route::resource('categorias','Categorias');

	/* rutas IMAGENES */
	Route::get('imagenes/{id}/edit',[
		'uses' => 'Imagenes@edit',
		'as' => 'admin.imagenes.edit'
	]);
	Route::post('imagens/{id}',[
		'uses' => 'Imagenes@update',
		'as' => 'admin.imagenes.update'
	]);
	Route::post('imagenes/{ref_id}',[
		'uses' =>'Imagenes@add',
		'as'=>'admin.imagenes.store'
	]);
	Route::delete('imagenes/{id}/destroy',[
		'uses'=>'Imagenes@destroy',
		'as' =>'admin.imagenes.destroy'
	]);

});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
