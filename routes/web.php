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

Route::bind('product',function($slug){
  return App\Producto::where('slug',$slug)->first();
});

Route::bind('categoria',function($categoria){
  return App\Categoria::find($categoria);
});

Route::get('/',[
'as' => 'home',
'uses' => 'StoreController@index'
]);

Route::get('product/{slug}',[
'as' => 'product-detail',
'uses' =>'StoreController@show'
]);


Route::resource('categoria','CategoriaController');
Route::resource('store','StoreController');
// carrito


Route::get('cart/show',[
'as' => 'cart-show',
'uses' =>'CartController@show'
]);

Route::get('cart/add/{product}',[
'as' => 'cart-add',
'uses' =>'CartController@add'
]);

Route::get('cart/delete/{product}',[
'as' => 'cart-delete',
'uses' =>'CartController@delete'
]);

Route::get('cart/trash',[
'as' => 'cart-trash',
'uses' =>'CartController@trash'
]);

Route::get('cart/update/{product}/cantidad',[
'as' => 'cart-update',
'uses' =>'CartController@update'
]);



Route::get('order-detail', [
	//'middleware' => 'auth:user',
	'as' => 'order-detail',
	'uses' => 'CartController@orderDetail'
]);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// admin.

route::get('admin/home', function(){
  return view('admin/home');

});

route::get('store/partials/about', function(){
  return view('store/partials/about');
});

  route::get('store/partials/info', function(){
    return view('store/partials/info');
});




///////////////////////////////////////////////////
Route::group(['namespace' => 'Admin', 'middleware' => ['auth'], 'prefix' => 'admin'], function()
{

	Route::get('home', function(){
		return view('admin.home');
	});

	Route::resource('categoria', 'CategoriaController');

	Route::resource('producto', 'ProductController');







});

Route::resource('admin/usuario', 'UsuarioController');


/////////////////////////////////////////////////



/*Route::resource('admin/categoria', 'Admin\CategoriaController');
Route::resource('admin/producto', 'Admin\ProductController');
*/


Route::get('auth/login', 'Auth\loginController@logout');

Route::get('auth/logout',[
  'as'=> 'logout',
  'uses'=>'Auth\LoginController@logout'
]);

Route::get('order-detail',[
  'middleware'=>'auth',
  'as'=>'order-detail',
  'uses'=>'CartController@orderDetail'
]);
