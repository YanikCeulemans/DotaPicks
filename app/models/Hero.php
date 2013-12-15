<?php
/**
 * Created by JetBrains PhpStorm.
 * User: yanikceulemans
 * Date: 19/11/13
 * Time: 21:42
 * To change this template use File | Settings | File Templates.
 */

class Hero extends Eloquent{
    public $timestamps = false;

    public function scopeRadiant($query){
        return $query->where('is_radiant', '=', 1);
    }

    public function scopeDire($query){
        return $query->where('is_radiant', '=', 0);
    }

    public function scopeOfType($query, $type){
        return $query->where('type', '=', $type);
    }

/*    public function agility($query){
        return $query->where('type', '=', 'agi');
    }

    public function intelligence($query){
        return $query->where('type', '=', 'int');
    }*/
}