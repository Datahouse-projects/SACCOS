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
Route::get('/saccos/edit/organization/{id}', [
    'uses'=>'SaccosManagementController@edit',
    'as'=>'saccos.edit.organization'
]);
Route::post('/saccos/update/organization/{id}', [
    'uses'=>'SaccosManagementController@update',
    'as'=>'saccos.update.organization'
]);
/*########################################################
           SACCOS DEPARTMENTS ROUTES
##########################################################*/
Route::get('/saccos/organizations/departments', [
    'uses'=>'SaccosDepartmentController@index',
    'as'=>'saccos.organizations.departments'
]);
/*########################################################
            SACCOS MEMBERS ROUTES
##################################################*/

Route::get('/saccos/members/managements', [
    'uses'=>'SaccosMemberManagementController@index',
    'as'=>'saccos.members.managements'
]);
Route::get('/saccos/create/member', [
    'uses'=>'SaccosMemberManagementController@create',
    'as'=>'saccos.create.member'
]);
Route::post('/saccos/store/members', [
    'uses'=>'SaccosMemberManagementController@store',
    'as'=>'saccos.store.member'
]);

/*########################################################
            SACCOS LOANS ROUTES
##########################################################*/
Route::get('/saccos/Loans/management', [
    'uses'=>'SaccosLoansManagementController@index',
    'as'=>'saccos.loans.management'
]);

Route::get('/saccos/create/loans', [
    'uses'=>'SaccosLoansManagementController@create',
    'as'=>'saccos.create.loans'
]);

/*########################################################
            SACCOS CONTRIBUTIONS ROUTES
##########################################################*/
Route::get('/saccos/contributions/payments/managements', [
    'uses'=>'SaccosContributionsAndPaymentsController@create',
    'as'=>'saccos.contributions.payments.managements'
]);
############################################################
Route::get('/saccos/');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
/*########################################################
            SACCOS NORMAL SYSTEM USER ROUTES
##########################################################*/

//LOAN

Route::get('/user/loan','SaccosNormalSystemUserController@loan')->name('user.loan');
Route::get('/user/loan/create','SaccosNormalSystemUserController@createLoan')->name('user.loan.create');
Route::post('/user/loan/store','SaccosNormalSystemUserController@storeLoan')->name('user.loan.store');
Route::get('/user/loan/edit/{id}','SaccosNormalSystemUserController@editLoan')->name('user.loan.edit');
Route::get('/user/loan/update/{id}','SaccosNormalSystemUserController@updateLoan')->name('user.loan.update');
Route::get('/user/loan/destroy/{id}','SaccosNormalSystemUserController@destroyLoan')->name('user.loan.destroy');

//CONTRIBUTION AND PAYMENTS

Route::get('/user/payment_and_contribution','SaccosNormalSystemUserController@contributionAndPayment')->name('user.payment.contribution');
Route::get('/user/payment/create','SaccosNormalSystemUserController@createPayment')->name('user.payment.create');
Route::put('/user/payment/store','SaccosNormalSystemUserController@storePayment')->name('user.payment.store');
Route::get('/user/payment/edit/{id}','SaccosNormalSystemUserController@editPayment')->name('user.payment.edit');
Route::get('/user/payment/update/{id}','SaccosNormalSystemUserController@updatePayment')->name('user.payment.update');

//SHARE

Route::get('/user/share','SaccosNormalSystemUserController@share')->name('user.share');
Route::get('/user/share/create','SaccosNormalSystemUserController@createLoan')->name('user.share.create');


############################################################



/*########################################################
            SACCOS SALARY ROUTES
##########################################################*/
Route::get('/saccos/salaries/managements', [
    'uses'=>'SaccosSalariesManagementController@index',
    'as'=>'Saccos.salaries.management'
]);



/*########################################################
            SACCOS SHARE ROUTES
##########################################################*/
Route::get('/saccos/shares/managements', [
    'uses'=>'SaccosSharesManagementController@index',
    'as'=>'saccos.shares.management'
]);



/*########################################################
            SACCOS USER ACCOUNT ROUTES
##########################################################*/
Route::get('/saccos/users/accounts', [
    'uses'=>'SaccosUsersAccountsController@index',
    'as'=>'system.users.accounts.management'
]);