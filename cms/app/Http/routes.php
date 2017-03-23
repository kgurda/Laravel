<?php


//Route::get('/', function () {
//
//    return view('welcome');
//
//});

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

//Route::resource('posts', 'PostsController');


/*
 * -----database sql querys--------
 */

Route::get('/insert', function () {

    DB::insert('insert into posts(title, content) values(?,?)', ['PHP with Laravel', 'PHP Laravel is the best thing that has happened to PHP']);


});

Route::get('/read', function() {


    $results = DB::select('select * from posts where id = ?', [1]);

//    foreach ($results as $post) {
//
//        return $post->title;
//    }

    return $results; //give us object

});

Route::get('/update', function() {


    $updated = DB::update('update posts set title = "Updated title" where id = ?', [1]);

    return $updated;



});

Route::get('delete', function() {

   $deleted = DB::delete('delete from posts where id = ?', [1]);

   return $deleted;

});


/*
 * -------------------------------------------
 */




Route::get('/contact', 'PostsController@contact');

Route::get('post/{id}/{name}', 'PostsController@showPost');



Route::group(['middleware' => ['web']], function() {


});