<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::controller('authen', 'AuthenPageController');
Route::controller('researcher', 'ResearcherPageController');
Route::controller('clearinghouse', 'CHPageController');
Route::controller('company', 'CompanyPageController');

// Researcher
Route::post('/researcher_save_info', 'ResearcherPageController@postSaveInfo');
Route::post('/researcher_insert_institute', 'ResearcherPageController@postInsertInstitute');
Route::post('/researcher_insert_work_history', 'ResearcherPageController@postInsertWorkHistory');
Route::post('/researcher_save_address', 'ResearcherPageController@postSaveAddress');
