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
/*
Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
*/
// localhost:8000/maintenanceReps
Route::get('maintenanceReps', function(){
	return view('maintenance_reps');
});


// report mgt
Route::post('submitReport', array('uses' => 'ReportController@store'));
Route::get('view_report', function(){
	$reports = DB::table('reports')->get();
	return view('view_report');//->with('reports', $reports);
});

Route::get('display_report', function(){
	$reports = DB::table('reports')->get();
});

Route::group(['middleware' => 'web'], function () {
	
Auth::routes();

Route::get('/home', 'HomeController@index');

	Route::get('/', function () {
		return view('index');
	});

	Route::get('/user_list', [
		'uses' => 'UserController@getAdminPage',
		'as' => 'user_list',
		'middleware' => 'roles',
		'roles' => ['Admin']
	]);

    Route::post('/user_list/assign-roles', [
        'uses' => 'UserController@postAdminAssignRoles',
        'as' => 'user_list.assign',
        'middleware' => 'roles',
        'roles' => ['Admin']
    ]);
});