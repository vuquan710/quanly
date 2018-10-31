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
//
Route::get('/', ['as' => 'homes.index','uses' => 'User\HomesController@index']);
Route::get('/new',['as' => 'student.new.index', 'uses' => 'User\HomesController@studentNew']);
Route::get('/next',['as' => 'student.next.index', 'uses' => 'User\HomesController@studentNext']);
Route::get('/test',['as' => 'student.test.index', 'uses' => 'User\HomesController@studentTest']);
Route::get('/waiting',['as' => 'student.waiting.index', 'uses' => 'User\HomesController@studentWaiting']);
Route::get('/tutoring',['as' => 'student.tutoring.index', 'uses' => 'User\HomesController@studentTutoring']);
Route::get('/off',['as' => 'student.off.index', 'uses' => 'User\HomesController@studentOff']);
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

                Route::match(['get'], 'employee', ['as' => 'admin.employee.index', 'uses' => 'EmployeeController@index']);
                Route::match(['get', 'post'], 'employee/create', ['as' => 'admin.employee.create', 'uses' => 'EmployeeController@create']);
                Route::match(['get', 'post'], 'employee/update', ['as' => 'admin.employee.update', 'uses' => 'EmployeeController@update']);
                Route::post('employee/delete',['as'=>'admin.employee.delete','uses'=>'EmployeeController@delete']);

                Route::match(['get'], 'salary', ['as' => 'admin.salary.index', 'uses' => 'SalaryController@index']);
                Route::match(['get', 'post'], 'salary/create', ['as' => 'admin.salary.create', 'uses' => 'SalaryController@create']);
                Route::match(['get', 'post'], 'employee/update', ['as' => 'admin.employee.update', 'uses' => 'EmployeeController@update']);
                Route::post('employee/delete',['as'=>'admin.employee.delete','uses'=>'EmployeeController@delete']);

                Route::match(['get'], 'students', ['as' => 'admin.student.students.index', 'uses' => 'StudentController@index']);
                Route::match(['get', 'post'], 'students/create', ['as' => 'admin.student.students.create', 'uses' => 'StudentController@create']);
                Route::match(['get', 'post'], 'students/update', ['as' => 'admin.student.students.update', 'uses' => 'StudentController@update']);
                Route::post('students/delete',['as'=>'admin.student.students.delete','uses'=>'StudentController@delete']);
                //new  1
                Route::match(['get'], 'new', ['as' => 'admin.student.new.index', 'uses' => 'RegisterNewController@index']);
                Route::match(['get', 'post'], 'new/create', ['as' => 'admin.student.new.create', 'uses' => 'RegisterNewController@create']);
                Route::match(['get', 'post'], 'new/update', ['as' => 'admin.student.new.update', 'uses' => 'RegisterNewController@update']);
                Route::post('new/delete',['as'=>'admin.student.new.delete','uses'=>'RegisterNewController@delete']);
                Route::get('new/download',['as'=>'admin.student.new.download','uses'=>'RegisterNewController@download']);


                //next 2
                Route::match(['get'], 'next', ['as' => 'admin.student.next.index', 'uses' => 'RegisterNextController@index']);
                Route::match(['get', 'post'], 'next/create', ['as' => 'admin.student.next.create', 'uses' => 'RegisterNextController@create']);
                Route::match(['get', 'post'], 'next/update', ['as' => 'admin.student.next.update', 'uses' => 'RegisterNextController@update']);
                Route::post('next/delete',['as'=>'admin.student.next.delete','uses'=>'RegisterNextController@delete']);
                Route::get('next/download',['as'=>'admin.student.next.download','uses'=>'RegisterNewController@download']);

                //test 3
                Route::match(['get'], 'test', ['as' => 'admin.student.test.index', 'uses' => 'TestClassController@index']);
                Route::match(['get', 'post'], 'test/create', ['as' => 'admin.student.test.create', 'uses' => 'TestClassController@create']);
                Route::match(['get', 'post'], 'test/update', ['as' => 'admin.student.test.update', 'uses' => 'TestClassController@update']);
                Route::post('test/delete',['as'=>'admin.student.test.delete','uses'=>'TestClassController@delete']);

                //waiting 4
                Route::match(['get'], 'waiting', ['as' => 'admin.student.waiting.index', 'uses' => 'WaitingStudentController@index']);
                Route::match(['get', 'post'], 'waiting/create', ['as' => 'admin.student.waiting.create', 'uses' => 'WaitingStudentController@create']);
                Route::match(['get', 'post'], 'waiting/update', ['as' => 'admin.student.waiting.update', 'uses' => 'WaitingStudentController@update']);
                Route::post('waiting/delete',['as'=>'admin.student.waiting.delete','uses'=>'WaitingStudentController@delete']);

                //tutoring 5
                Route::match(['get'], 'tutoring', ['as' => 'admin.student.tutoring.index', 'uses' => 'TutoringStudentController@index']);
                Route::match(['get', 'post'], 'tutoring/create', ['as' => 'admin.student.tutoring.create', 'uses' => 'TutoringStudentController@create']);
                Route::match(['get', 'post'], 'tutoring/update', ['as' => 'admin.student.tutoring.update', 'uses' => 'TutoringStudentController@update']);
                Route::post('tutoring/delete',['as'=>'admin.student.tutoring.delete','uses'=>'TutoringStudentController@delete']);

                //of 6
                Route::match(['get'], 'off', ['as' => 'admin.student.off.index', 'uses' => 'OffStudentController@index']);
                Route::match(['get', 'post'], 'off/create', ['as' => 'admin.student.off.create', 'uses' => 'OffStudentController@create']);
                Route::match(['get', 'post'], 'off/update', ['as' => 'admin.student.off.update', 'uses' => 'OffStudentController@update']);
                Route::post('off/delete',['as'=>'admin.student.off.delete','uses'=>'OffStudentController@delete']);
            });

    });
//End BackEnd route
