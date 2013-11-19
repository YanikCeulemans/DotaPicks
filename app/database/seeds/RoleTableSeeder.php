<?php
/**
 * Created by JetBrains PhpStorm.
 * User: yanikceulemans
 * Date: 18/11/13
 * Time: 15:21
 * To change this template use File | Settings | File Templates.
 */

class RoleTableSeeder extends Seeder{
    public function run()
    {
        DB::table('roles')->delete();

        Role::create(array('name' => 'Lane Support'));
        Role::create(array('name' => 'Carry'));
        Role::create(array('name' => 'Disabler'));
        Role::create(array('name' => 'Ganker'));
        Role::create(array('name' => 'Nuker'));
        Role::create(array('name' => 'Initiator'));
        Role::create(array('name' => 'Jungler'));
        Role::create(array('name' => 'Pusher'));
        Role::create(array('name' => 'Roamer'));
        Role::create(array('name' => 'Durable'));
        Role::create(array('name' => 'Escape'));
        Role::create(array('name' => 'Semi-Carry'));
        Role::create(array('name' => 'Support'));
    }
}