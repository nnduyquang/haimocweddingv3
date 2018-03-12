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

    //MENU


    Route::get('sml_admin/menu','MenuController@loadMenuIndex' )->name('menu.index');
    Route::get('sml_admin/find/{id}','MenuController@findMenuById' );
    Route::get('sml_admin/updateNodeFamily/{id}/{parentId}','MenuController@updateNodeFamily' );
    Route::post('sml_admin/menu-create','MenuController@createNewMenu' )->name('menu.store');
    Route::patch('sml_admin/menu-update/{id}','MenuController@updateMenu' )->name('menu.update');
    Route::get('sml_admin/load-tree','MenuController@loadTreeMenu');
    Route::delete('sml_admin/menu-delete/{id}','MenuController@deleteMenu');

});

