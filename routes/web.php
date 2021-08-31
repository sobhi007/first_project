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

// Route::resource('user', UserController::class)->middleware('blogs');
// Route::get('/user', 'userController@index')->name('login');
// Route::post('/user', 'userController@check');

// Route::get('/signup', 'userController@view_signup');

// Route::post('signup/add', 'userController@signup');

// Route::get('logout', function () {
//     Auth::logout();
//     return redirect('/user');
// });

// Route::post('user/get_name', 'userController@get');

// Route::get('view', 'userController@view');

// Route::group(['prefix' => 'blog', 'middleware' => 'blogs'], function () {

//     Route::post('/store', 'blogController@store');
//     Route::get('/main', 'blogController@index');

//     Route::get('/show', 'blogController@show_blogs');

//     Route::delete('delete/{id?}', 'blogController@delete');
//     Route::get('/{id}', 'blogController@destroy');

// });

// Route::prefix('admin')->group(function () {

//     Route::get('/login', 'adminController@login');

//     Route::get('/logout', 'adminController@logout');

//     Route::post('/check', 'adminController@check');

//     Route::group(['middleware' => 'adminMW:admin_auth'], function () {

//         Route::get('/home', 'adminController@index');

//     });

// });
Auth::routes(['verify'=>'true']);
Route::prefix('user')->group(function () {

    Route::get('login', 'userController@login')->name('login');

    Route::get('signup', 'userController@signup');
    
    


    Route::post('signup/add', 'userController@add_new_acount');
    
    Route::get('logout', 'userController@logout');

    Route::post('check', 'userController@check');

    Route::group(['middleware'=>'userMW','middleware'=>'verified'],function () {

    Route::get('home', 'userController@index')->name('home');

    });

});
