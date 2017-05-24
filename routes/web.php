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
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard.index');
});



 Route::get('category','CategoryController@index');
 Route::get('sub-category','SubCategoryController@index');
 Route::get('post','PostController@index');
 Route::get('/post/{post}','PostController@show');




// route to process the form




// Route::get('landing', function () {
//     // Only authenticated users may enter...
//       //  return view('login.landing');checkUser
// //dd(Session::get('isLogged'));
// if(Session::get('isLogged')==1){
// 	return view('login.landing');
// }else{
// 	return redirect('login');
// }

// });



Auth::routes();


Route::get('landing', function () {
    //

    return view('login.landing');

})->middleware('auth');

 Route::get('logout','HomeController@doLogout');
// Route::get('login','HomeController@index');


