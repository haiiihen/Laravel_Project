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

use Illuminate\Support\Facades\Route;

Route::get('/blog', 'SiteController@blog');
Route::get('/test','SiteController@home')->name('test');


Route::get('/', 'SiteController@index');
Route::get('/register', 'SiteController@register')->name('register');
Route::post('/postregister', 'SiteController@postregister');

Route::get('/login', 'AuthController@login')->name('login');
Route::post('/postlogin', 'AuthController@postlogin');
Route::get('/logout', 'AuthController@logout');

Route::group(['middleware' => ['auth', 'checkRole:admin']], function () {
    Route::get('/admin', 'Admin\AdminController@index')->name('index');
    Route::post('/admin/create', 'Admin\AdminController@create')->name('create');
    Route::get('/admin/{id}/edit', 'Admin\AdminController@edit');
    Route::post('/admin/{id}/update', 'Admin\AdminController@update');
    Route::get('/admin/{siswa}/delete', 'Admin\AdminController@delete');
    Route::get('/admin/{id}/profile', 'Admin\AdminController@profile'); //part 24, 3m
    Route::get('/admin/exportExcel', 'Admin\AdminController@exportExcel');
    Route::get('/admin/exportPdf', 'Admin\AdminController@exportPdf');
    Route::get('/admin/profile', 'Admin\AdminController@profileAdmin')->name('adminProfile');
    Route::get('/posts','PostController@index')->name('posts.index');
    Route::get('post/add',[
        'uses' => 'PostController@add',
        'as' => 'posts.add'
    ]);
    Route::post('post/create',[
        'uses' => 'PostController@create',
        'as' => 'posts.create',
    ]);
});

Route::group(['middleware' => ['auth', 'checkRole:member']], function(){
    Route::get('/member/dataMember', 'Member\MemberController@index')->name('index');
    Route::get('/member/profile', 'Member\MemberController@profile')->name('memberProfile');
    
});

Route::group(['middleware' => ['auth', 'checkRole:admin,member']], function () {
    Route::get('/dashboard', 'DashboardController@index');
});

Route::get('getdatamember', [
    'uses' => 'Admin\AdminController@getdatamember',
    'as' => 'ajax.get.data.member',
]);

Route::get('/{slug}',[
    'uses' => 'SiteController@singlepost',
    'as' => 'site.single.post'
]);