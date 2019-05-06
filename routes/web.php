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

//testing view
// Route::get('/test', function () {
//     dd(App\Category::find(1)->posts)
// });


//main index page view
Route::get('/',[
  'uses'=>'FrontendController@index',
  'as'=>'home'
]);



//authenticated user loggedin
Route::group(['middleware' => 'auth'], function () {

//adding new post form view
Route::get('/admin/post',[
  'uses'=>'PostController@index',
  'as'=>'admin.post'
]);

//storing new posts
Route::post('/admin/createpost',[
  'uses'=>'PostController@store',
  'as'=>'admin.createpost'
]);


//displaying list of posts
Route::get('/admin/postlist',[
    'uses'=>'PostController@create',
    'as'=>'admin.postlist'
]);

//editing Posts
Route::get('/admin/editpost/{id}',[
  'uses'=>'PostController@edit',
  'as'=>'admin.editpost'
]);

//add new Category
Route::get('/admin/category',[
  'uses'=>'PostCategory@index',
  'as'=>'admin.category'
]);

//add new Category form handling
Route::post('/admin/category/add',[
  'uses'=>'PostCategory@store',
  'as'=>'category.add'
]);


//add tabs form
Route::get('/admin/posttabs',[
    'uses'=>'PostTab@index',
    'as'=>'admin.tab'
]);

//adding tabs
Route::post('/admin/createtabs',[
  'uses'=>'PostTab@store',
  'as'=>'admin.tabs'
]);










});

Auth::routes();

Route::group(['middleware' => 'auth'], function() {

Route::get('admin/home',function(){
    return view('admin/home');
});



});
