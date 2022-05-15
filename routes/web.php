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

// Route::get('/', function () {
//     return view('welcome');
// });

// 【ユーザー】
// ログイン画面
Route::get('/login', 'Auth\User\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\User\LoginController@login');
// 新規登録
Route::get('/register', 'Auth\User\RegisterController@showRegistrationForm')->name('register');
Route::post('/register', 'Auth\User\RegisterController@register');

// ログアウト
Route::post('/logout', 'Auth\User\LoginController@logout')->name('logout');

// トップ
Route::get('/', 'User\ReservationController@home')->name('home');
// 会議室選択
Route::get('/select-room', 'User\ReservationController@select')->name('room.select');
// 空き状況
Route::get('/room/{year}/{month}/{room}', 'User\RoomController@index')->name('room.index');
// 部屋詳細
Route::get('/rooms', 'User\RoomController@show')->name('room.show');

// 予約画面
Route::get('/reservation/create/{year}/{month}/{day}/{room}', 'User\ReservationController@create')->name('reservation.create');
Route::post('/reservation/store/{year}/{month}/{day}/{room}', 'User\ReservationController@store')->name('reservation.store');
// 予約完了画面
Route::get('/reservation/stored', 'User\ReservationController@thanks')->name('reservation.thanks');
// 予約詳細画面
Route::get('/reservation/{reservation}', 'User\ReservationController@show')->name('reservation.show');
// 予約変更
Route::get('/reservation/edit/{reservation}', 'User\ReservationController@edit')->name('reservation.edit');
Route::put('/reservation/update/{reservation}', 'User\ReservationController@update')->name('reservation.update');
// 予約取消
Route::delete('/reservation/destroy/{reservation}', 'User\ReservationController@destroy')->name('reservation.destroy');
Route::get('/reservation/updated', 'User\ReservationController@updated')->name('reservation.updated');

// 過去履歴一覧
Route::get('/reservation/history', 'User\ReservationController@history')->name('reservation.history');

// プロフィール
Route::get('/profile', 'User\UserController@profile')->name('user.profile');
// プロフィール変更
Route::get('/profile.edit', 'User\UserController@edit')->name('user.edit');
Route::put('/profile.update', 'User\UserController@update')->name('user.update');


// 【管理者】
//ログイン画面
Route::get('/admin/login', 'Auth\Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('/admin/login', 'Auth\Admin\LoginController@login');
// 新規登録
Route::get('/admin/register', 'Auth\Admin\RegisterController@showRegistrationForm')->name('admin.register');
Route::post('/admin/register', 'Auth\Admin\RegisterController@register');

// ログアウト
Route::post('/admin/logout', 'Auth\Admin\LoginController@logout')->name('logout');

// トップ
Route::get('/admin/home', 'ReservationController@adminHome')->name('admin.home');
// 空き状況
Route::get('/admin/reservation/{room}', 'ReservationController@adminIndex')->name('admin.reservation.index');

// 料金変更
Route::get('/admin/price', 'RoomController@price')->name('admin.room.price');
Route::get('/admin/room/edit/{room}', 'RoomController@edit')->name('admin.room.edit');
Route::post('/admin/room/update/{room}', 'RoomController@update')->name('admin.room.update');
Route::get('/admin/room/updated', 'RoomController@updated')->name('admin.room.updated');

// 備品管理
Route::get('/admin/rental', 'RoomController@rental')->name('admin.rental');

// ユーザー検索
Route::get('/admin/user/search', 'UserController@search')->name('admin.user.search');
// ユーザー変更
Route::get('/admin/user/edit/{user}', 'UserController@adminEdit')->name('admin.user.edit');
Route::put('/admin/user/update/{user}', 'UserController@adminUpdate')->name('admin.user.update');
Route::delete('/admin/user/delete/{user}', 'UserController@adminDestroy')->name('admin.user.destroy');
Route::get('/admin/user/updated', 'UserController@adminUpdated')->name('admin.user.updated');

// プロフィール変更
Route::get('/admin/profile', 'AdminController@profile')->name('admin.profile');
Route::get('/admin/profile/edit', 'AdminController@edit')->name('admin.profile.edit');
Route::post('/admin/profile/update', 'AdminController@update')->name('admin.profile.update');
Route::get('/admin/profile/updated', 'AdminController@updated')->name('admin.profile.updated');
