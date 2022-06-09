<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');


// Route::get('/home', function () {
//     return view('website.home');
// })->name('home');

Route::get('/', 'WebsiteController@home')->name('home');

Route::get('/service', 'WebsiteController@services'
// function(){
//     return view('website.services.all_service');}
)->name('services');

Route::get('/about','WebsiteController@about'
// function () {return view('website.about');}
)->name('about');

Route::get('/teams', 'WebsiteController@team'
// function () {
//     return view('website.team');}
)->name('team');

Route::get('/galler', 'WebsiteController@gallery')->name('gallery');
// function () {
//     return view('website.gallery');}





Route::get('/news','WebsiteController@blog'
// function () {return view('website.blog');}
    )->name('blog');

Route::get('/service_request', function () {
    return view('website.service_request');
})->name('service.request');

Route::get('/contact', function () {
    return view('website.contact');
})->name('contact');

Route::get('/equipment_rental_external', function () {
    return view('website.services.equipment_rental_external');
})->name('equipment_rental_external');

Route::get('/equipment_rental_internal', function () {
    return view('website.services.equipment_rental_page_internal');
})->name('equipment_rental_internal');

Route::get('/truck_rental', function () {
    return view('website.services.truck_rental_page');
})->name('truck_rental');

Route::get('/read_more_news_blog',function(){
    return view('website.news_blog.read_more_blog');
})->name('read_more');


Route::get('/login', 'WebsiteController@loginView')->name('login');
Route::post('/login', 'WebsiteController@login');

Route::group(['middleware' => ['auth', 'web']], function () {

    Route::get('/admin/blog', 'BlogController@index')->name('blogg');
    Route::post('/admin/blog', 'BlogController@create');
    Route::get('/admin/blog/{id}/delete', 'BlogController@destroy');
    Route::get('/admin/blog/{id}/edit', 'BlogController@edit');
    Route::post('/admin/blog/edit', 'BlogController@update')->name('blog-update');

    Route::get('/admin/product', 'ProductController@index');
    Route::post('/admin/product', 'ProductController@create');
    Route::get('/admin/product/{id}/edit', 'ProductController@edit');
    Route::get('/admin/product/{id}/delete', 'ProductController@destroy');
    Route::post('/admin/product/update', 'ProductController@update');

    Route::get('/admin/category', 'CategoryController@index');
    Route::post('/admin/category', 'CategoryController@create');
    Route::get('/admin/category/{id}/delete', 'CategoryController@destroy');



    Route::get('/admin/service', 'ServiceController@index');
    Route::post('/admin/service', 'ServiceController@create');
    Route::get('/admin/service/{id}/delete', 'ServiceController@destroy');
    Route::get('/admin/service/{id}/edit', 'ServiceController@edit');
    Route::post('/admin/service/edit', 'ServiceController@update')->name('service-update');

    Route::get('/admin/sliders', 'SliderController@index');
    Route::post('/admin/sliders', 'SliderController@create')->name('slider-add');
    Route::get('/admin/sliders/delete/{id}', 'SliderController@destroy');

    Route::get('/admin/about', 'AboutController@index');
    Route::post('/admin/about', 'AboutController@update')->name('about-update');

    Route::get('/admin/message', 'MessageController@index');

    Route::get('/admin/message/{id}/delete', 'VolunteerController@destroy');
    Route::get('/admin/message/{id}/view', 'MessageController@edit');
    Route::get('/admin/message/{id}/attend', 'MessageController@update');

    Route::get('/admin/repairs', 'RepairController@index');
    Route::get('/admin/repair/{id}/delete', 'RepairController@destroy');
    Route::get('/admin/repair/{id}/view', 'RepairController@show');
    Route::get('/admin/repair/{id}', 'RepairController@edit');

    Route::get('/admin/testies', 'TestimonialController@index');
    Route::post('/admin/testy', 'TestimonialController@create');
    Route::post('/admin/testy/update', 'TestimonialController@update');
    Route::get('/admin/testy/{id}/view', 'TestimonialController@show');
    Route::get('/admin/testy/{id}/delete', 'TestimonialController@destroy');

    Route::get('/admin/team/add', 'TeamController@show');
    Route::get('/admin/team', 'TeamController@index')->name('teams');
    Route::post('/admin/team', 'TeamController@create')->name('add-team');
    Route::get('/admin/team/edit/{id}', 'TeamController@edit');
    Route::post('/admin/team/update', 'TeamController@update')->name('team-update');
    Route::get('/admin/team/delete/{id}', 'TeamController@destroy');

    Route::get('/admin/gallery', 'GalleryController@index');
    Route::post('/admin/gallery', 'GalleryController@create');
    Route::get('/admin/gallery/{name}/delete', 'GalleryController@deleteImage');

    Route::get('/logout', 'WebsiteController@logout');
});
