<?php

use Illuminate\Support\Facades\Route;

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

/**
 * Planos
 */
Route::prefix('admin')
    ->namespace('Admin')
    ->group(function () {
        // Planos
        Route::any('plans/search', 'PlanController@search')->name('plans.search');
        Route::get('plans', 'PlanController@index')->name('plans.index');
        Route::get('plans/create', 'PlanController@create')->name('plans.create');
        Route::get('plans/{url}', 'PlanController@show')->name('plans.show');
        Route::post('plans', 'PlanController@store')->name('plans.store');
        Route::delete('plans/{url}', 'PlanController@destroy')->name('plans.destroy');
        Route::get('plans/{url}/edit', 'PlanController@edit')->name('plans.edit');
        Route::put('plans/{url}', 'PlanController@update')->name('plans.update');

        // Planos /Detalhes
        Route::post('plans/{url}/details', 'PlanDetailController@store')->name('plans.details.store');
        Route::get('plans/{url}/details/create', 'PlanDetailController@create')->name('plans.details.create');
        Route::get('plans/{url}/details', 'PlanDetailController@index')->name('plans.details');
        Route::put('plans/{url}/details/{idPlanDetail}', 'PlanDetailController@update')->name('plans.details.update');
        Route::get('plans/{url}/details/{idPlanDetail}/edit', 'PlanDetailController@edit')->name('plans.details.edit');
        Route::get('plans/{url}/details/{idPlanDetail}/show', 'PlanDetailController@show')->name('plans.details.show');
        Route::delete('plans/{url}/details/{idPlanDetail}', 'PlanDetailController@destroy')->name('plans.details.destroy');

        /**
         * Permissões
         */
        Route::any('permissions/search', 'ACL\PermissionController@search')->name('permissions.search');
        Route::resource('permissions', 'ACL\PermissionController');

        /**
         * Permissões x Profile
         */
        Route::get('profiles/{id}/permissions', 'ACL\PermissionProfileController@permissions')->name('profiles.permissions');

        /**
         * Perfis
         */
        Route::any('profiles/search', 'ACL\ProfileController@search')->name('profiles.search');
        Route::resource('profiles', 'ACL\ProfileController');


        Route::get('/', 'PlanController@index')->name('admin.index');
    });
Route::get('/', function () {
    return view('welcome');
});
