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
Route::get('/bang-gia/bang-gia-ngoai-canh', function () {
    return view('frontend.price.index');
});
Route::get('/lien-he/', function () {
    return view('frontend.contact.index');
});
Route::get('/dia-diem/bien', function () {
    return view('frontend.location.index');
});

Route::get('/admin/sml_login', 'AuthController@checklogin');
Route::post('sml_login', 'AuthController@login')->name('login');
Route::get('/admin/sml_logout', 'AuthController@logout')->name('logout');

Route::group(['middleware' => ['auth']], function () {
    Route::get('sml_admin/dashboard', function () {
        return view('backend.admin.dashboard.index');
    })->name('dashboard');
    Route::resource('sml_admin/users', 'UserController');
    //ROLE
    Route::get('sml_admin/roles', ['as' => 'roles.index', 'uses' => 'RoleController@index', 'middleware' => ['permission:role-list|role-create|role-edit|role-delete']]);
    Route::post('sml_admin/roles/create', ['as' => 'roles.store', 'uses' => 'RoleController@store', 'middleware' => ['permission:role-create']]);
    Route::get('sml_admin/roles/create', ['as' => 'roles.create', 'uses' => 'RoleController@create', 'middleware' => ['permission:role-create']]);
    Route::get('sml_admin/roles/{id}/edit', ['as' => 'roles.edit', 'uses' => 'RoleController@edit', 'middleware' => ['permission:role-edit']]);
    Route::patch('sml_admin/roles/{id}', ['as' => 'roles.update', 'uses' => 'RoleController@update', 'middleware' => ['permission:role-edit']]);
    Route::delete('sml_admin/roles/{id}', ['as' => 'roles.destroy', 'uses' => 'RoleController@destroy', 'middleware' => ['permission:role-delete']]);
    Route::get('sml_admin/roles/{id}', ['as' => 'roles.show', 'uses' => 'RoleController@show']);

    //PAGE
    Route::get('sml_admin/page', ['as' => 'page.index', 'uses' => 'PageController@index', 'middleware' => ['permission:page-list|page-create|page-edit|page-delete']]);
    Route::post('sml_admin/page/create', ['as' => 'page.store', 'uses' => 'PageController@store', 'middleware' => ['permission:page-create']]);
    Route::post('sml_admin/page', ['as' => 'page.search', 'uses' => 'PageController@search']);
    Route::get('sml_admin/page/create', ['as' => 'page.create', 'uses' => 'PageController@create', 'middleware' => ['permission:page-create']]);
    Route::get('sml_admin/page/{id}/edit', ['as' => 'page.edit', 'uses' => 'PageController@edit', 'middleware' => ['permission:page-edit']]);
    Route::patch('sml_admin/page/{id}', ['as' => 'page.update', 'uses' => 'PageController@update', 'middleware' => ['permission:page-edit']]);
    Route::delete('sml_admin/page/{id}', ['as' => 'page.destroy', 'uses' => 'PageController@destroy', 'middleware' => ['permission:page-delete']]);

    //CATEGORY POST
    Route::get('sml_admin/danh-muc-bai-viet', ['as' => 'categorypost.index', 'uses' => 'CategoryPostController@index', 'middleware' => ['permission:page-list|page-create|page-edit|page-delete']]);
    Route::post('sml_admin/danh-muc-bai-viet/create', ['as' => 'categorypost.store', 'uses' => 'CategoryPostController@store', 'middleware' => ['permission:page-create']]);
//    Route::post('sml_admin/danh-muc-bai-vie', ['as' => 'categorypost.search', 'uses' => 'TuyenDungController@search']);
    Route::get('sml_admin/danh-muc-bai-viet/create', ['as' => 'categorypost.create', 'uses' => 'CategoryPostController@create', 'middleware' => ['permission:page-create']]);
    Route::get('sml_admin/danh-muc-bai-viet/{id}/edit', ['as' => 'categorypost.edit', 'uses' => 'CategoryPostController@edit', 'middleware' => ['permission:page-edit']]);
    Route::patch('sml_admin/danh-muc-bai-viet/{id}', ['as' => 'categorypost.update', 'uses' => 'CategoryPostController@update', 'middleware' => ['permission:page-edit']]);
    Route::delete('sml_admin/danh-muc-bai-viet/{id}', ['as' => 'categorypost.destroy', 'uses' => 'CategoryPostController@destroy', 'middleware' => ['permission:page-delete']]);

    //POST
    Route::get('sml_admin/post', ['as' => 'post.index', 'uses' => 'PostController@index', 'middleware' => ['permission:page-list|page-create|page-edit|page-delete']]);
    Route::post('sml_admin/post/create', ['as' => 'post.store', 'uses' => 'PostController@store', 'middleware' => ['permission:post-create']]);
    Route::post('sml_admin/post', ['as' => 'post.search', 'uses' => 'PostController@search']);
    Route::get('sml_admin/post/create', ['as' => 'post.create', 'uses' => 'PostController@create', 'middleware' => ['permission:post-create']]);
    Route::get('sml_admin/post/{id}/edit', ['as' => 'post.edit', 'uses' => 'PostController@edit', 'middleware' => ['permission:post-edit']]);
    Route::patch('sml_admin/post/{id}', ['as' => 'post.update', 'uses' => 'PostController@update', 'middleware' => ['permission:post-edit']]);
    Route::delete('sml_admin/post/{id}', ['as' => 'post.destroy', 'uses' => 'PostController@destroy', 'middleware' => ['permission:post-delete']]);

    //MENU


    Route::get('sml_admin/menu','MenuController@loadMenuIndex' )->name('menu.index');
    Route::get('sml_admin/find/{id}','MenuController@findMenuById' );
    Route::get('sml_admin/updateNodeFamily/{id}/{parentId}','MenuController@updateNodeFamily' );
    Route::post('sml_admin/menu-create','MenuController@createNewMenu' )->name('menu.store');
    Route::patch('sml_admin/menu-update/{id}','MenuController@updateMenu' )->name('menu.update');
    Route::get('sml_admin/load-tree','MenuController@loadTreeMenu');
    Route::delete('sml_admin/menu-delete/{id}','MenuController@deleteMenu');

    //LOCATION
    Route::get('sml_admin/dia-diem', ['as' => 'location.index', 'uses' => 'LocationController@index', 'middleware' => ['permission:location-list|location-create|location-edit|location-delete']]);
    Route::post('sml_admin/dia-diem/create', ['as' => 'location.store', 'uses' => 'LocationController@store', 'middleware' => ['permission:location-create']]);
    Route::post('sml_admin/dia-diem', ['as' => 'location.search', 'uses' => 'LocationController@search']);
    Route::get('sml_admin/dia-diem/create', ['as' => 'location.create', 'uses' => 'LocationController@create', 'middleware' => ['permission:location-create']]);
    Route::get('sml_admin/dia-diem/{id}/edit', ['as' => 'location.edit', 'uses' => 'LocationController@edit', 'middleware' => ['permission:location-edit']]);
    Route::patch('sml_admin/dia-diem/{id}', ['as' => 'location.update', 'uses' => 'LocationController@update', 'middleware' => ['permission:location-edit']]);
    Route::delete('sml_admin/dia-diem/{id}', ['as' => 'location.destroy', 'uses' => 'LocationController@destroy', 'middleware' => ['permission:location-delete']]);

});

