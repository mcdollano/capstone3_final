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


// HOME PAGE

Route::get('/', 'ArticlesController@showArticles2');

Route::get('/admin', function() {
    return view('template');
});

Route::get('/articles', 'ArticlesController@showArticles');

Route::post('/editArticle/{blog_id}', 'ArticlesController@editArticle');

Route::post('/deleteArticle/{blog_id}','ArticlesController@deleteArticle');

// EDIT ARTICLE //

Route::get('/editArticle',function() {
	return view('edit_article');
});

// WRITE ARTICLE //

Route::get('/writeArticle',function() {
	return view('write_article');
});

// SAVE ARTICLE //

Route::post('/saveArticle', 'ArticlesController@addArticle');

// REGISTER //

Route::get('/register', 'RegisterController@create');
Route::post('/registerUser', 'RegisterController@registerUser');

Route::get('/checkuser', 'RegisterController@store');

// LOG IN //

Route::post('/login', 'LogInController@store');

// LOG OUT //

Route::get('/logout', 'LogInController@destroy');

// DISPLAY ARTICLES //

Route::get('/viewarticle/{id}', 'ArticlesController@viewArticles');

// VIEW DASHBOARD

Route::get('/dashboard', 'ArticlesController@show_dashboard');

// DISPLAY CATEGORY BUSINESS 

Route::get('/articleCategoryBusiness', 'ArticlesController@show_category_business');

// DISPLAY CATEGORY STARTUP

Route::get('/articleCategoryStartup', 'ArticlesController@show_category_startup');

// DISPLAY CATEGORY CAREER 

Route::get('/articleCategoryCareer', 'ArticlesController@show_category_career');

// DISPLAY CATEGORY LEADERSHIP

Route::get('/articleCategoryLeadership', 'ArticlesController@show_category_leadership');

//EDIT PROFILE //

Route::get('/editProfile', 'RegisterController@editProfile');

//SAVE EDIT PROFILE //

Route::post('/saveEditProfile', 'RegisterController@saveEditProfile');

// SEARCH //

Route::get('/search', 'ArticlesController@search');