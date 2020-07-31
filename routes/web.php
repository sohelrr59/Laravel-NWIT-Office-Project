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

Route::get('/', function () {
    return view('welcome')                     ;
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=>['auth','account']], function(){


Route::get('/account', 'AccountController@account')->name('account');

});
Route::group(['middleware'=>['auth','teacher']], function(){

Route::get('/teacher', 'TeacherController@teacher')->name('teacher');
	
});

Route::group(['middleware'=>['auth','register']], function(){
	Route::get('/officeuser', 'OfficeuserController@register')->name('register');
});

Route::group(['middleware'=>['auth','admission']], function(){
	
	Route::get('/admission_entry', 'AdmissionController@admission_entry')->name('admission_entry');
	
	Route::get('/admited_view', 'AdmissionController@admited_view')->name('admited_view');

	Route::get('/student_profile/{id}', 'AdmissionController@profile')->name('profile');

	Route::get('/editform/{id}', 'AdmissionController@edit')->name('edit');

	Route::put('/update_profile/{id}', 'AdmissionController@update')->name('update');

	Route::get('/delete_data/{id}', 'AdmissionController@delete')->name('delete');
	Route::get('/add_payment', 'AdmissionController@add_payment')->name('add_payment');

	Route::get('/payment_entry/{id}', 'AdmissionController@payment_entry')->name('payment_entry');
	Route::post('/payment_post', 'AdmissionController@payment_post')->name('payment_post'); 
	Route::get('/paid_view', 'AdmissionController@paid_view')->name('paid_view');  
	Route::get('/paid/{id}', 'AdmissionController@paid')->name('paid');

	Route::get('/editpaid/{id}', 'AdmissionController@editpaid')->name('editpaid');

	Route::put('/updatepaid/{id}', 'AdmissionController@updatepaid')->name('updatepaid');
	Route::get('/deletepaid/{id}', 'AdmissionController@deletepaid')->name('deletepaid');

	Route::get('/admited_view_search', 'AdmissionController@admited_view_search')->name('admited_view_search');
	Route::get('/add_payment_search', 'AdmissionController@add_payment_search')->name('add_payment_search');
	Route::get('/paid_view_search', 'AdmissionController@paid_view_search')->name('paid_view_search');

});


Route::get('/test', 'TestController@test')->name('test');


Route::post('/insert', 'Controller@insert');
Route::post('/admit', 'AdmissionController@admission_post')->name('admit');