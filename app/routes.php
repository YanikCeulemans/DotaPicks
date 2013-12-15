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
    function getHeroes($type){
        return array(
            "radiant" => Hero::ofType($type)->radiant()->orderBy('id')->get(),
            "dire" => Hero::ofType($type)->dire()->orderBy('id')->get()
        );
    }
    $strHeroes = getHeroes('str');
    $agiHeroes = getHeroes('agi');
    $intHeroes = getHeroes('int');
    return View::make('home')->with('allHeroes',  array(
        $strHeroes,
        $agiHeroes,
        $intHeroes
    ));
});
