<?php

use App\Post;

use App\User;

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

//Route::resource('posts', 'PostsController');


/*
 * -----database sql querys--------
 */

//Route::get('/insert', function () {
//
//    DB::insert('insert into posts(title, content) values(?,?)', ['Laravel', 'Laravel is the best ']);
//
//
//});
//
//Route::get('/read', function() {
//
//
//    $results = DB::select('select * from posts where id = ?', [1]);
//
////    foreach ($results as $post) {
////
////        return $post->title;
////    }
//
//    return $results; //give us object
//
//});
//
//Route::get('/update', function() {
//
//
//    $updated = DB::update('update posts set title = "Updated title" where id = ?', [1]);
//
//    return $updated;
//
//
//
//});
//
//Route::get('delete', function() {
//
//   $deleted = DB::delete('delete from posts where id = ?', [1]);
//
//   return $deleted;
//
//});

//Route::get('/contact', 'PostsController@contact');
//
//Route::get('post/{id}/{name}', 'PostsController@showPost');

/*
 * -----eloquent --------
 */

//Route::get('/read', function() {
//
//
//    $posts = Post::all();
//
//    foreach ($posts as $post) {
//
//        return $post->title;
//    }
//
//});
//
//Route::get('/find', function() {
//
//
//    $posts = Post::find(2);
//
//    return $posts->title;
//
//});

//Route::get('/findwhere', function() {
//
//   $posts = Post::where('id', 3)->orderBy('id', 'desc')->take(1)->get();
//
//   return $posts;
//
//});


//Route::get('/findmore', function() {
//
////    $posts = Post::findOrFail(1);
////
////    return $posts;
//
//    $posts = Post::where('users_count', '<', 50)->firstOrFail();
//    return $posts;
//
//});



Route::get('/basicinsert', function() {

    $post = Post::find(7);

    $post->title = 'new Eloquent title insert';
    $post->content = 'Description';

    $post->save();

});


//Route::get('/create', function() {
//
//    Post::create(['title'=>'the create method', 'content' => 'create content']);
//
//
//});

//Route::get('/update', function() {
//
//    Post::where('id', 2)->where('is_admin', 0)->update(['title'=>'new php title', 'content' => 'new content updated']);
//
//
//});


//Route::get('/delete', function() {
//
//    $post = Post::find(2);
//    $post->delete();
//
//});


//Route::get('/delete2', function() {
//
//    Post::destroy([4,5]);
//
//    Post::where('is_admin', 0)->delete();
//
//});
//
//Route::get('/softDelete', function() {
//
//    Post::find(7)->delete();
//
//});

//Route::get('/readsoftdelete', function() {
//
////    $post = Post::find(6);
////
////    return $post;
//
//// show deleted record
//
////     $post = Post::withTrashed()->where('id','>=', 6)->get();
////
////     return $post;
//
//    $post = Post::onlyTrashed()->where('id', 6)->get();
//
//    return $post;
//
//});

//Route::get('/restore', function() {
//
//     Post::withTrashed()->where('is_admin', 0)->restore();
//
//
//});

//Route::get('forcedelete', function() {
//
//    Post::onlyTrashed()->where('is_admin', 0)->forceDelete();
//
//});




/*
 * -----eloquent relationships--------
 */

// one to one realtionships

//Route::get('/user/{id}/post', function($id) {
//
//
//    return User::find($id)->post->title;
//
//});
//
//
//
//Route::get('/post/{id}/user', function($id) {
//
//
//    return Post::find($id)->user->name;
//
//});

//one to many relationnships

//Route::get('/posts', function() {
//
//    $user = User::find(1);
//
//    foreach ($user->posts as $post) {
//
//        echo $post->title . "<br>";
//    }
//
//});


//many to many relationnships

//
//Route::get('/user/{id}/roles', function($id) {
//
//    $roles = User::find($id)->roles;
//
//    foreach($roles as $role) {
//        echo $role->name . "<br>";
//    }
//});

















Route::group(['middleware' => ['web']], function() {


});