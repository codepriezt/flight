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

Route::get('/', 'PageController@login')->name('home');

Route::post('/login' ,'UserController@postlogin')->name('login');

Route::get('/logout' , [
'uses' => 'UserController@logout',
'as'=>'logout',

]);

Route::get('/confirm-email/{email}', 'UserController@check_email');
Route::get('/valpass/{password}', 'UserController@validatefname');

 
Route::get('/signup' , 'PageController@signup');
Route::post('/signup' ,'UserController@postsignup');

Route::get('/dashboard', [
    'uses'=>'PostController@dashboard',
    'as'=>'dashboard',
    'middleware'=>'auth'
]);

Route::get('post', 'PageController@post');

Route::post('/postcreatepost' , [
'uses' =>'PostController@postcreatepost',
'as'=>'postcreate',
'middleware' => 'auth'

]);

Route::post('/comment', [
    'uses'=>'PostController@commentpost',
    'as'=>'comment',
    'middleware'=>'auth'
]);  


Route::post('/like',[
    'uses'=>'PostController@likepost',
    'as'=>'like',
    'middleware'=>'auth'

]);

Route::get('/post.delete/{post_id}' , [
    'uses'=>'PostController@deletepost',
    'as'=>'post.delete'
]);

Route::get('/profile','PageController@profile');
Route::post('/profile' , [
'uses'=>'UserController@profileaccount',
'as'=>'profile'

]);

Route::post('/update',[
    'uses'=> 'UserController@saveupdatedprofile',
    'as'=>'update',
    'middleware'=>'auth'
]);


Route::get('/image',[
    'uses'=>'UserController@getuserimage',
    'as'=>'image',
    'middleware'=>'auth'
]);

Route::post('/addfriend',[
    'uses'=> 'FriendController@addfriend',
    'as'=>'addfriend',
    'middleware'=>'auth'
]);

Route::get('/search' , 'PageController@search');
Route::get('/groups' , 'PageController@groups');

Route::get('/user/activation' , 'UserController@userActivation');

Route::get('/home', 'HomeController@index')->name('home');
