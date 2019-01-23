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

Route::get('/', function () {
    /*$query = 'SELECT * FROM users WHERE id=4';
    $users = \DB::select($query);
    $users = \DB::table('users')
                ->where('id', 4)
                ->select('id', 'name')
                ->get();
    $users = \App\User::where('id', 4)
                        ->select('id', 'name')
                        ->get();
    dd($users);

    $user = \App\User::find(31);
    $user->name = 'Thiago 32';
    $user->email = 'athiago884@gmail.com';
    $user->password = bcrypt('123456');
    $user->save();

    $userData = [
        'name' => 'Usuario novo',
        'email' => 'email@gmail.com',
        'password' => bcrypt('123456')
    ];*/

    $user = \App\User::whereIn('id', [31]);
    $user->delete();  

    return view('welcome');
});

Route::get('hello/{name}', function ($name) {
    return view('hello', ['name' => $name]);
    //return redirect()->route('products_single');
});

/*
Route::get('/users', 'Test\UserController@index');
Route::get('/users/{id}', 'Test\UserController@show');

Route::resource('/users', 'Test\UserController');
Route::resource('/products', 'Test\ProductController');*/

Route::group(['namespace' => 'Test'],function(){
    Route::get('/users/{id}', 'UserController@show');
    Route::get('/prod', 'ProductController@index');
});

Route::prefix('products')->name('products_')->group(function(){
    Route::get('/ok', function(){
        return phpversion();
    })->name('index');

    Route::get('/1', function(){
        return 'Produtos 1';
    })->name('single');
});

Route::group(['middleware' => ['test']], function(){
    Route::get('middle', function() { return 'Middle'; });

    Route::get('middle/2', function() { return 'Middle 2'; });
});

Route::get('view', function () {
    return view('view', ['name' => 'test']);
})->middleware('auth', 'test');

Route::get('show/{name?}/{sobrenome?}', function ($name = null, $sobrenome = null) {
    if(is_null($name))
        return 'Informe um nome para exibição';
    return $name . ' ' .$sobrenome;
});
