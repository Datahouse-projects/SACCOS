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

Route::get('/', [
    'uses'=>'BaseTemplateController@index',
    'as'=>'index'
]);
/*########################################################
 SACCOS ORGANIZATIONS ROUTES
##########################################################*/
Route::get('/saccos/organizations/management', [
    'uses'=>'SaccosManagementController@index',
    'as'=>'saccos.organizations.management'
]);
Route::get('/saccos/create/organizations', [
    'uses'=>'SaccosManagementController@create',
    'as'=>'saccos.create.organizations'
]);
Route::post('/saccos/store/organizations', [
    'uses'=>'SaccosManagementController@store',
    'as'=>'saccos.store.organizations'
]);
############################################################
/*########################################################
 SACCOS DEPARTMENTS ROUTES
##########################################################*/
Route::get('/saccos/organizations/departments', [
    'uses'=>'SaccosDepartmentController@index',
    'as'=>'saccos.organizations.departments'
]);
############################################################
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
