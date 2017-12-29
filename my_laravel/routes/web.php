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
    return view('welcome');
});

Route::get('/welcome', function () {
    return view('login-new');
});

Route::get('/signup', function () {
    return view('register-new');
});


//Route::get('/dashboard', function () {
//    return view('dashboard');
//});


Auth::routes();


//Route::group(['prefix' => 'api/v1', 'middleware' => 'auth:api'], function () {
//    Route::post('/short', 'UrlMapperController@store');
//});


Route::post('/login-new', 'HomeController@login')->name('home');
Route::get('/dashboard1','DashboardController@dash');
//Route::get('/register','DashboardController@register');
Route::get('/userupdate','DashboardController@show');
Route::post('/updateuserdetails','DashboardController@userDetailsUpdate');

Route::get('/pending','DashboardController@pending');

Route::get('/user_pending','DashboardController@userPending');

Route::get('/resolved','DashboardController@resolved');

Route::get('/user_resolved','DashboardController@userResolved');
Route::post('/signup','RegistersController@register');
Route::post('/dashboard','DashboardController@signInChecking');
//Route::post('/posted','DashboardController@posting');

Route::post('/dashboard2','IssueController@upload');
Route::post('/adminupdate','AdminIssueController@adminupdate');
Route::get('/adminissues','AdminIssueController@adminn');
Route::get('viewIssue','AdminIssueSolveController@viewissue');
//Route::get('login/{email}/{password}','DashboardController@ajax');
Route::get('/admindashboard','DashboardController@showAdminDashboard');
Route::get('/userdashboard','DashboardController@showUserDashboard');


//Route::get('/admindashboard','DashboardController@signInChecking');