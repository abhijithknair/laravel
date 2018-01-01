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

Route::get('','DashboardController@getUserHomepage');
Route::post('/login-new', 'HomeController@login')->name('home');
Route::get('/dashboard1','DashboardController@dash');
//Route::get('/register','DashboardController@register');
Route::get('/userupdate','DashboardController@show');
Route::post('/updateuserdetails','DashboardController@userDetailsUpdate');


//Route::get('add-to-cart/{id}', [
//    'uses' => 'ProductController@getAddToCart',
//    'as' => 'product.addToCart'
//]);


Route::get('/pending','DashboardController@pending');

Route::get('/user_pending','DashboardController@userPending');

Route::get('/resolved','DashboardController@resolved');

Route::get('/user_resolved','DashboardController@userResolved');
Route::post('/signup','RegistersController@register');
Route::post('/dashboard', 'DashboardController@signInChecking');
Route::get('/userpostissue','DashboardController@userPostIssue');

Route::post('/dashboard2','IssueController@upload');
Route::post('/adminupdate','AdminIssueController@adminupdate');

Route::post('/userissueupdate','AdminIssueController@userIssueUpdate');

Route::get('/adminissues','AdminIssueController@adminn');
Route::get('viewIssue','AdminIssueSolveController@viewissue');
Route::get('/viewIssue_user','AdminIssueController@userPendingUpdate');
Route::get('/userViewIssue1','AdminIssueSolveController@userviewissue1');

Route::get('/userViewIssue2','AdminIssueSolveController@userviewissue2');


//Route::get('login/{email}/{password}','DashboardController@ajax');
Route::get('/admindashboard','DashboardController@showAdminDashboard');
Route::get('/userdashboard','DashboardController@showUserDashboard');


//Route::get('/admindashboard','DashboardController@signInChecking');