<?php


use Illuminate\Support\Facades\Auth;
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
Route::get('/', 'HomeController@index')->name('home.index');



Auth::routes();


Route::middleware('auth')->group(
    function(){

        Route::get('/admin/home', 'admin\MenuController@index')->name('admin.home');


        Route::resource('/admin/cardapio','Admin\CardapioController')->except('store');
        Route::post('/admin/cardapio/create2','Admin\CardapioController@create2')->name('cardapio.create2');
        Route::post('/admin/cardapio/store/{quantidade}','Admin\CardapioController@store')->name('cardapio.store');

    }

);
