<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

/*                                  |---------------------------------------------|
************************************|                Perk Assignments              |************************************
                                    |---------------------------------------------|                                  */

Route::group(array('prefix' => 'perk'), function(){

	Route::get('/registration', array('as' => 'registration', 'uses' => 'AssignmentController@registration'));

	Route::post('/register', array('as' => 'register', 'uses' => 'AssignmentController@register'));

});

/*----------------------------------------------->END of USER APIs<--------------------------------------------------*/