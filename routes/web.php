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

Route::get('/',[
    'uses' => 'IndexController@getIndex',
    'as ' => 'index'
]);

Route::get('/about',[
    'uses' => 'AboutController@getAbout',
    'as ' => 'about'
]);

Route::get('/contact',[
    'uses' => 'ContactController@getContact',
    'as ' => 'contact'
]);

 Route::get('/product',[
     'uses' => 'ProductController@getProduct',
     'as ' => 'product'
 ]);

 Route::get('/cart',[
     'uses' => 'CartController@getCart',
     'as ' => 'cart'
]);

Route::get('/profile',[
     'uses' => 'ProfileController@getProfile',
     'as ' => 'profile'
 ]);

// Route::get('/',[
//     'uses' => 'IndexController',
//     'as ' => 'index'
// ]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
