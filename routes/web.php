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



Route::get('/','HomeController@index');
Route::get('/home','HomeController@index');
Route::get('/about','HomeController@about');
Route::post('/search','HomeController@search');

Route::get('/danh-muc/{category_id}','CategoryController@show_category');
Route::get('/chi-tiet/{job_id}','JobController@job_detail');
Route::get('/xem-them/{blog_id}','BlogController@blog_detail');
Route::get('/blog','BlogController@show_blog');
Route::get('/contact','HomeController@contact');


Route::get('/upload','UploadController@upload');
Route::post('/upload-cv','UploadController@upload_cv');
Route::get('/all-hiring','UploadController@all_hiring');
Route::get('/show-cv/{cv_id}','UploadController@show_cv');
Route::get('/delete-cv/{cv}','UploadController@delete_cv');
Route::post('/all-cv','UploadController@all_cv');

Route::get('/admin','AdminController@index');
Route::get('/dashboard','AdminController@show_dashboard');
Route::get('/logout','AdminController@logout');
Route::post('/admin-dashboard','AdminController@dashboard');

Route::get('/add-category','CategoryController@add_category');
Route::get('/edit-category/{category_id}','CategoryController@edit_category');
Route::get('/delete-category/{category_id}','CategoryController@delete_category');
Route::post('/update-category/{category_id}','CategoryController@update_category');
Route::get('/all-category','CategoryController@all_category');
Route::post('/save-category','CategoryController@save_category');
Route::get('/unactive-category/{category_id}','CategoryController@unactive_category');
Route::get('/active-category/{category_id}','CategoryController@active_category');

Route::get('/add-job','JobController@add_job');
Route::get('/edit-job/{job_id}','JobController@edit_job');
Route::get('/delete-job/{job_id}','JobController@delete_job');
Route::post('/update-job/{job_id}','JobController@update_job');
Route::get('/all-job','JobController@all_job');
Route::post('/save-job','JobController@save_job');
Route::get('/unactive-job/{job_id}','JobController@unactive_job');
Route::get('/active-job/{job_id}','JobController@active_job');

Route::get('/add-blog','BlogController@add_blog');
Route::get('/edit-blog/{blog_id}','BlogController@edit_blog');
Route::get('/delete-blog/{blog_id}','BlogController@delete_blog');
Route::post('/update-blog/{blog_id}','BlogController@update_blog');
Route::get('/all-blog','BlogController@all_blog');
Route::post('/save-blog','BlogController@save_blog');
Route::get('/unactive-blog/{blog_id}','BlogController@unactive_blog');
Route::get('/active-blog/{blog_id}','BlogController@active_blog');
