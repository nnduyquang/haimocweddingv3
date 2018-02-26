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
    return view('frontend.home.index');
});
Route::get('/album/duc-ngan', function () {
    return view('frontend.album.detail.index');
});
Route::get('/danh-muc/chup-anh-be', function () {
    return view('frontend.category.index');
});
Route::get('/tin-tuc/', function () {
    return view('frontend.news.index');
});
Route::get('/tin-tuc/abc', function () {
    return view('frontend.news.detail.index');
});
Route::get('/bang-gia/', function () {
    return view('frontend.price.index');
});
Route::get('/lien-he/', function () {
    return view('frontend.contact.index');
});


