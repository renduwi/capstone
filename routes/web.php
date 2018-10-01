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


/*
Route::get('/hello', function () {
    return 'Hello World';
});

Route::get('/users/{name}/{id}', function($name, $id){
    return 'this is user '.$name.' with an id'.$id;
});
*/

use Carbon\Carbon;
use App\User;

Route::get('/index', 'PagesController@index');    
Route::get('/login', 'PagesController@login');  
Route::get('/register', 'PagesController@register');  

Route::resource('posts', 'PostsController');
Route::resource('vehicle', 'VehicleController');
Route::resource('repair', 'AdRepairShopController');
Route::resource('mechaniclist', 'ListMechanicController');
Route::resource('servicereq', 'ServiceReqController');


Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/mechanic', 'HomeController@index');
Route::get('/mechanic/show', 'HomeController@show');

Route::prefix('admin')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    
});

Route::prefix('repairshop')->group(function(){
    Route::get('/login', 'Auth\RepairShopLoginController@showLoginForm')->name('repairshop.login');
    Route::post('/login', 'Auth\RepairShopLoginController@login')->name('repairshop.login.submit');
    Route::get('/', 'RepairShopController@index')->name('repairshop.dashboard');
});



