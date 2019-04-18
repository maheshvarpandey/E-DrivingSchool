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
Route::get('/', function () {
    return view('home');
});
*/
Route::get('/drivingschool/home', function () {
    return view('/drivingschool/home');
});

Route::get('/drivingschool/about', function () {
    return view('drivingschool.about');
});


Route::any('/drivingschool/contact1', function () {
    return view('drivingschool.contact');
});


Route::get('/drivingschool/admin', function () {
    return view('drivingschool.admin');
});

Route::get('/drivingschool/register', function () {
    return view('/drivingschool/register');
});



Route::get('/drivingschool/header', function () {
    return view('/drivingschool/header');
});

Route::get('/drivingschool/login', function () {
    return view('drivingschool.login');
});

Route::get('/drivingschool/quote1', function () {
    return view('drivingschool.quote');
});

Route::get('/register', 'uploadimage@index');
Route::post('register', 'uploadimage@upload');

Route::get('/', function()
{
	return view('drivingschool.home');
});

//Route::get('/drivingschool/quotes','datacontroller@data');
//Route::get('/drivingschool/contact','datacontrollers@form');

//Route::get('/drivingschool.quote','orders@form');
Route::get('/drivingschool/quote','oreders@store');
Route::get('/drivingschool/contact','oreders@signup');
//Route::get('/login','datacontroller@formdata2');

//Route::any('drivingschool.quote', 'datacontroller@data');
//Route::get('','datacontroller@datashow');

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
