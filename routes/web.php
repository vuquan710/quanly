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
//domain(env('DOMAIN_ADMIN', 'admin.fashion-dev.com'))
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

                Route::resource('products', 'ProductsController', [
                    'names' => [
                        'index' => 'admin.products.index',
                        'show' => 'admin.products.show',
                        'edit' => 'admin.products.edit',
                    ]
                ]);
                Route::resource('categories', 'CategoriesController', [
                    'names' => [
                        'index' => 'admin.categories.index',
                        'show' => 'admin.categories.show',
                        'edit' => 'admin.categories.edit',
                        'create' => 'admin.categories.create',
                    ]
                ]);
                Route::resource('orders', 'OrdersController', [
                    'names' => [
                        'index' => 'admin.orders.index',
                        'show' => 'admin.orders.show',
                        'edit' => 'admin.orders.edit',
                    ]
                ]);
                Route::match(['post'], 'orders/list-recent-order', ['as' => 'admin.orders.listRecentOrder', 'uses' => 'OrdersController@listRecentOrder']);
            });

    });
//End BackEnd route
