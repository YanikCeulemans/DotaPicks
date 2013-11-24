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
Route::get('/home', function()
{
    $strHeroes = Hero::where('type', '=', 'str')->orderBy('is_radiant', 'DESC')->orderBy('id')->get();
    $agiHeroes = Hero::where('type', '=', 'agi')->orderBy('is_radiant', 'DESC')->orderBy('id')->get();
    $intHeroes = Hero::where('type', '=', 'int')->orderBy('is_radiant', 'DESC')->orderBy('id')->get();
    return View::make('home')->with('allHeroes',  array(
        $strHeroes,
        $agiHeroes,
        $intHeroes
    ));
});
