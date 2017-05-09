<?php

use Psy\Command\WhereamiCommand;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('view','viewController@index');
Route::get('views','viewController@views');

Route::get('user_{id}', function ($id) {
    return 'User '.$id;
})->where('id','[0-9]+');
    
Route::get('useraa', ['as'=>'profile',function(){
    echo route('profile');
    return '<h1>命名路由</h1>';
}]);

Route::get('posts/{post}/comments/{comment}', function ($postId, $commentId) {
    echo 'post'.$postId."<br />";
    echo 'comment'.$commentId;
});

Route::group(['prefix'=>'admin','namespace'=>'admin','middleware'=>'web'],function(){

    Route::get('login', 'IndexController@login');
    Route::get('index', 'IndexController@index');
    Route::resource('photo','PhotoController');
});

Route::group(['domain'=>'{account}.laravel.com'],function(){
    Route::get('login/{id}', function($account,$id){});   
});
//Route::get('admin', 'admin\IndexController@index'); 
//Route::get('admin/login', 'admin\IndexController@login');
//Route::get('admin/index', 'admin\IndexController@index');

//Route::get('test', ['as'=>'profile','uses'=>'admin\IndexController@index']);

//Route::get('test', 'admin\IndexController@index')->name('profile');
