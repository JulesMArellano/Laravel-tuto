<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/*
Route::get('salut', function(){
	return 'Salut les gens';
});

Route::group(['prefix' => 'admin', 'middleware' => 'ip'], function(){

	Route::get('salut', function(){
		return 'Salut les gens';
	});

});

Route::get('salut/{slug}-{id}', ['as' => 'salut',function($slug,$id){
	return "Lien: " . route('salut', ['slug' => $slug, 'id' => $id]);
}])
 -> where('slug','[a-z0-9\-]+')
 -> where('id','[0-9]+')
 ;
 */

Route::resource('news','PostsController');

Route::resource('link', 'LinksController', ['only' => ['create', 'store']]);
Route::get('r/{link}',['as' => 'link.show','uses' => 'LinksController@show'])->where('link','[0-9]+');

/*
Route::get('links/create', 'LinksController@create');
Route::post('links/create', 'LinksController@store');
*/

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);