<?php


Route::get('/', function () {

    return view('welcome');
});

//Route::get('/about', function () {
//
//    return "Hi about page!";
//
//});
//
//Route::get('/contact', function () {
//
//    return "Hi contact page!";
//
//});
//
//Route::get('/post/{id}', function($id) {
//
//    return "this is post number " . $id;
//
//});
//
//Route::get('/admin/posts/exaple', array('as'=>'admin.home', function() {
//
//    $url = route('admin.home');
//
//    return "this url is " . $url;
//
//}));
//
//
//Route::get('/post/{id}', 'PostsController@index');

Route::resource('posts', 'PostsController');

Route::get('/contact', 'PostsController@contact');


Route::group(['middleware' => ['web']], function() {


});