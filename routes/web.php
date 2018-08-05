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

Route::middleware(['UserMiddleware'])
    ->domain(env('DOMAIN_USER', 'fashion-dev.com'))
    ->namespace('User')
    ->group(function () {
        Route::resource('/', 'HomesController', ['only' => [
            'index'
        ]]);
        //News route
        Route::resource('news', 'NewsController', ['only' => [
            'index', 'show'
        ]]);

        Route::get('user/profile', function () {
            // Uses first & second Middleware
        });
    });

//BackEnd route
Route::prefix('admin')
    ->namespace('Admin')
    ->group(function () {
        Route::get('/', function () {
            return redirect()->route('admin.auth.login');
        });
        Route::match(['get'], 'create', ['as' => 'admin.auth.create', 'uses' => 'AuthController@create']);
        Route::match(['get'], 'logout', ['as' => 'admin.auth.logout', 'uses' => 'AuthController@logout']);
        Route::match(['post'], 'forgot-password', ['as' => 'admin.auth.forgotPassword', 'uses' => 'AuthController@forgotPassword']);
        Route::match(['get', 'post'], 'reset-password/{token}', ['as' => 'admin.auth.resetPassword', 'uses' => 'AuthController@resetPassword']);
        Route::match(['get', 'post'], 'login', ['as' => 'admin.auth.login', 'uses' => 'AuthController@login']);
        Route::middleware(['AdminMiddleware'])
            ->group(function () {
                Route::resource('homes', 'HomesController', [
                    'names' => [
                        'index' => 'admin.homes.index'
                    ]
                ]);
                Route::resource('users', 'UsersController', [
                    'names' => [
                        'index' => 'admin.users.index',
                        'show' => 'admin.users.show',
                    ]
                ]);

                Route::resource('new', 'RegisterNewController', [
                    'names' => [
                        'index' => 'admin.new.index',
                    ]
                ]);

                Route::resource('next', 'RegisterNextController', [
                    'names' => [
                        'index' => 'admin.next.index',
                    ]
                ]);

                Route::resource('test', 'TestClassController', [
                    'names' => [
                        'index' => 'admin.test.index',
                    ]
                ]);

                Route::resource('waiting', 'WaitingStudentController', [
                    'names' => [
                        'index' => 'admin.waiting.index',
                    ]
                ]);

                Route::resource('tutoring', 'TutoringStudentController', [
                    'names' => [
                        'index' => 'admin.tutoring.index',
                    ]
                ]);

                Route::resource('off', 'OffStudentController', [
                    'names' => [
                        'index' => 'admin.off.index',
                    ]
                ]);

            });

    });
//End BackEnd route
