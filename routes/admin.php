<?php
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ], function () { //...


    Route::group(['prefix' => 'admin',
        'namespace' => 'Admin'],
        function () {

            Config::set('auth.defines', 'admin');
            Route::get('login', 'AdminController@showLogin');
            Route::post('login', 'AdminController@doLogin')->name('admin.login');
            Route::get('register', 'AdminController@showRegister')->name('admin.register');
            Route::post('register', 'AdminController@register')->name('admin.store');

//      Admin Guard
            Route::group(['middleware' => 'admin:admin'], function () {
                Route::get('/', function () {
                    return view('admin.home');
                })->name('admin.home');

                Route::get('logout', 'AdminController@logout');
            });

//
            Route::get('lang/{lang}', function ($lang) {
                session()->has('lang') ? session()->forget('lang') : '';
                $lang == 'ar' ? session()->put('lang', 'ar') : session()->put('lang', 'en');
                return back();
            });

        });

});

















