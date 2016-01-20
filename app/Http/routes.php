<?php

date_default_timezone_set('prc');
/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home','Auth/AuthController@index');

Route::get('/time',function(){
    return date('y-m-d h-i-s', time());
});

Route::get('/page',function(){
    return view('AdminHome');
});

Route::get('/editor',function(){
    $control_panel = file_get_contents(base_path()."/resources/views/control_panel.php");
    $control_panel = str_replace(array("\r\n", "\r", "\n"), '', $control_panel);
//    $control_panel = html_entity_decode($control_panel,ENT_HTML5 ,'utf-8');
//    dump($control_panel);
    return view('AdminHome', ['control_panel' => $control_panel]);
});

Route::post('submit', 'CodeController@receiveCode');

Route::get('/login',function(){
    return view('auth.login');
});

Route::get('/register',function(){
    return view('auth.register');
});


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
