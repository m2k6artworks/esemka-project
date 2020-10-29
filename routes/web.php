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
    return view('landing');
});

Route::post('/subscribe','SubscribeController@subscribe');

// For Offline Page PWA
Route::get('/offline', function() {
    return view('offline');
});


//Socialite / Login With Google
Route::get('/redirect/{provider}', 'Auth\SocialiteController@redirectToProvider');
Route::get('/callback/{provider}', 'Auth\SocialiteController@handleProviderCallback');

//BKK
Route::get('/bkk', function() {
    return 'Halaman untuk BKK';
})->middleware('role:bkk')->name('admin.page');

//SISWA
Route::get('/siswa', function() {
    return 'Halaman untuk siswa';
})->middleware('role:user')->name('user.page');

// Auth::routes();
// Auth::routes(['verify' => true]);

// Auth::routes();
// Auth::routes(['verify' => true]);

// //Mlebu Web e (wes login)
// Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/jobs', function() {
//     return view('jobs');
// });
// Route::get('/akun', 'AkunController@index');

// Route::get('auth/{provider}', 'Auth\SocialiteController@redirectToProvider');
// Route::get('auth/{provider}/callback', 'Auth\SocialiteController@handleProviderCallback');
// Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

// Route::get('auth/{provider}', 'Auth\SocialiteController@redirectToProvider');
// Route::get('auth/{provider}/callback', 'Auth\SocialiteController@handleProviderCallback');