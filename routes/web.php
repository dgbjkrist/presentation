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

Auth::routes(['verify' => true]);

Route::get('/', 'HomeController@index')->name('accueil');
Route::get('/equipe', 'HomeController@equipe')->name('equipe');

// ================
Route::get('/contact', 'HomeController@contact')->name('contact');
// =================

Route::get('/assurance/habitation','FrontController\AssuranceHabitationController@index')->name('assuranceh');



Route::get('/assurance_habitation/create','FrontController\AssuranceHabitationController@createStep1')->name('assuranceh.create');
Route::post('/assurance/create-step1', 'FrontController\AssuranceHabitationController@postCreateStep1')->name('assuranceh.step1');

Route::get('/assurance/create-step2', 'FrontController\AssuranceHabitationController@createStep2')->name('assuranceh.step2');
Route::post('/assurance/create-step2', 'FrontController\AssuranceHabitationController@postCreateStep2')->name('assuranceh.step2post');


Route::get('/assurance/create-step3', 'FrontController\AssuranceHabitationController@createStep3')->name('assuranceh.step3');
Route::post('/assurance/create-step3', 'FrontController\AssuranceHabitationController@postCreateStep3')->name('assuranceh.step3post');


Route::get('/assurance/create-step4', 'FrontController\AssuranceHabitationController@createStep4')->name('assuranceh.step4');
Route::post('/assurance/create-step4', 'FrontController\AssuranceHabitationController@postCreateStep4')->name('assuranceh.step4post');

Route::get('/assurance/create-step5', 'FrontController\AssuranceHabitationController@createStep5')->name('assuranceh.step5');
Route::post('/assurance/create-step5', 'FrontController\AssuranceHabitationController@checkout')->name('assuranceh.step5post');
//Route::post('/assurance/create-step3', 'FrontController\AssuranceHabitationController@postCreateStep4')->name('assuranceh.step4post');
//
Route::post('/payments_notify', 'FrontController\AssuranceHabitationController@notify')->name('frontend.payments.notify');
Route::post('/payments_return', 'FrontController\AssuranceHabitationController@return')->name('frontend.payments.return');
Route::get('/payments_cancel', 'FrontController\AssuranceHabitationController@cancel')->name('frontend.payments.cancel');





Route::group(['middleware' => ['auth']], function () {


         Route::group(['prefix' => 'admin/managment'], function() {

        Route::get('/home', function () {
            return view('index');
        })->name('home');

     Route::resource('users', 'UserController');

    Route::get('users_trashed', 'UserController@trashed')->name('users.trashed');
    Route::get('users_trashed/{id}', 'UserController@restoreShow')->name('users.restoreShow');
    Route::delete('users_restore/{student}', 'UserController@restore')->name('users.restore');
    Route::resource('roles', 'RoleController');
    Route::resource('categories','CategoryController');
    Route::resource('products','ProductController');


    Route::get('generator_builder', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@builder');
    Route::get('field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@fieldTemplate');
    Route::post('generator_builder/generate', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generate');


     });
    



});
