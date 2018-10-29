<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
//    return "Hi its working";
});
Route::auth();
Route::get('/logout', 'Auth\LoginController@logout');
Route::get('/home', 'HomeController@index');
Route::get('/post/{id}',['as'=>'home.post','uses'=> 'AdminPostController@post']);


Route::group(['middleware'=>['admin']],function(){
    Route::get('/admin',function(){
        return view('admin.index');
    });
    Route::resource('admin/users','AdminUsersController',['names'=>[
        'index'=>'admin.users.index',
        'store'=>'admin.users.store',
        'edit'=>'admin.users.edit',
        'create'=>'admin.users.create',
        'show'=>'admin.users.show'
    ]]);
    Route::resource('admin/posts','AdminPostController',['names'=>[
        'index'=>'admin.posts.index',
        'store'=>'admin.posts.store',
        'edit'=>'admin.posts.edit',
        'create'=>'admin.posts.create',
        'show'=>'admin.posts.show'
    ]]);
    Route::resource('admin/categories','AdminCategoriesController',['names'=>[
        'index'=>'admin.categories.index',
        'store'=>'admin.categories.store',
        'edit'=>'admin.categories.edit',
        'create'=>'admin.categories.create',
        'show'=>'admin.categories.show',
    ]]);
    Route::resource('admin/media','AdminMediaController',['names'=>[
        'index'=>'admin.media.index',
        'store'=>'admin.media.store',
        'edit'=>'admin.media.edit',
        'create'=>'admin.media.create',
        'show'=>'admin.media.show',
    ]]);
    Route::delete('admin/delete/media','AdminMediaController@deleteMedia');

    Route::resource('admin/comments','PostCommentController',['names'=>[
        'index'=>'admin.comments.index',
        'store'=>'admin.comments.store',
        'edit'=>'admin.comments.edit',
        'create'=>'admin.comments.create',
        'show'=>'admin.comments.show'
    ]]);


    Route::resource('admin/comments/replies','CommentReplyController',['names'=>[
        'index'=>'admin.comments.replies.index',
        'store'=>'admin.comments.replies.store',
        'edit'=>'admin.comments.replies.edit',
        'create'=>'admin.comments.replies.create',
        'show'=>'admin.comments.replies.show',
    ]]);

});

Route::group(['middleware'=>['auth']],function() {
    Route::post('comment/reply', 'CommentReplyController@createReply');

});

