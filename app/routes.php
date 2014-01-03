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

Route::get('about', function(){
    return 'Not done yet :(';
});

Route::model('hero', 'Hero');

Route::get('counters/{hero}', function(Hero $hero){
    return $hero->counters->toJson();
});

Route::get('combos/{hero}', function(Hero $hero){
    return $hero->combos->toJson();
});

Route::get('relatedHeroes/{hero}', function(Hero $hero){
    $combosAndCounters = array();
    $combosAndCounters['combos'] = $hero->combos->toArray();
    $combosAndCounters['counters'] = $hero->counters->toArray();
    return json_encode($combosAndCounters);
});
