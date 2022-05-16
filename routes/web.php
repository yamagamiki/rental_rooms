<?php

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
Route::get('/', 'ReservationController@home')->name('home');
// 会議室選択
Route::get('/select-room', 'ReservationController@select')->name('room.select');
// 空き状況
Route::get('/room/{year}/{month}/{room}', 'RoomController@index')->name('room.index');
// 部屋詳細
Route::get('/rooms', 'RoomController@show')->name('room.show');

// 予約画面
Route::get('/reservation/create/{year}/{month}/{day}/{room}', 'ReservationController@create')->name('reservation.create');
Route::post('/reservation/store/{year}/{month}/{day}/{room}', 'ReservationController@store')->name('reservation.store');
// 予約完了画面
Route::get('/reservation/stored', 'ReservationController@thanks')->name('reservation.thanks');
// 予約詳細画面
Route::get('/reservation/{reservation}', 'ReservationController@show')->name('reservation.show');
// 予約変更
Route::get('/reservation/edit/{reservation}', 'ReservationController@edit')->name('reservation.edit');
Route::put('/reservation/update/{reservation}', 'ReservationController@update')->name('reservation.update');
// 予約取消
Route::delete('/reservation/destroy/{reservation}', 'ReservationController@destroy')->name('reservation.destroy');
Route::get('/reservation/updated', 'ReservationController@updated')->name('reservation.updated');

// 過去履歴一覧
Route::get('/reservation/history', 'ReservationController@history')->name('reservation.history');

// プロフィール
Route::get('/profile', 'UserController@profile')->name('user.profile');
// プロフィール変更
Route::get('/profile.edit', 'UserController@edit')->name('user.edit');
Route::put('/profile.update', 'UserController@update')->name('user.update');


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
