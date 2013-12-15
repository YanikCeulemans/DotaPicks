<?php
/**
 * Created by JetBrains PhpStorm.
 * User: yanikceulemans
 * Date: 1,9/11/13
 * Time: 19:52
 * To change this template use File | Settings | File Templates.
 */
class HeroTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('heroes')->delete();

        Hero::create(array(
            'name' => 'axe',
            'type' => 'str',
            'is_ranged' => 0,
            'is_radiant' => 0
        ));
        Hero::create(array(
            'name' => 'antimage',
            'type' => 'agi',
            'is_ranged' => 0,
            'is_radiant' => 1
        ));
        Hero::create(array(
            'name' => 'bane',
            'type' => 'int',
            'is_ranged' => 1,
            'is_radiant' => 0
        ));
        Hero::create(array(
            'name' => 'bloodseeker',
            'type' => 'agi',
            'is_ranged' => 0,
            'is_radiant' => 0
        ));
        Hero::create(array(
            'name' => 'crystal_maiden',
            'type' => 'int',
            'is_ranged' => 1,
            'is_radiant' => 1
        ));
        Hero::create(array(
            'name' => 'drow_ranger',
            'type' => 'agi',
            'is_ranged' => 1,
            'is_radiant' => 1
        ));
        Hero::create(array(
            'name' => 'earthshaker',
            'type' => 'str',
            'is_ranged' => 0,
            'is_radiant' => 1
        ));
        Hero::create(array(
            'name' => 'juggernaut',
            'type' => 'agi',
            'is_ranged' => 0,
            'is_radiant' => 1
        ));
        Hero::create(array(
            'name' => 'mirana',
            'type' => 'agi',
            'is_ranged' => 1,
            'is_radiant' => 1
        ));
        Hero::create(array(
            'name' => 'nevermore',
            'type' => 'agi',
            'is_ranged' => 1,
            'is_radiant' => 0
        ));
        Hero::create(array(
            'name' => 'morphling',
            'type' => 'agi',
            'is_ranged' => 1,
            'is_radiant' => 1
        ));
        Hero::create(array(
            'name' => 'phantom_lancer',
            'type' => 'agi',
            'is_ranged' => 0,
            'is_radiant' => 1
        ));
        Hero::create(array(
            'name' => 'puck',
            'type' => 'int',
            'is_ranged' => 1,
            'is_radiant' => 1
        ));
        Hero::create(array(
            'name' => 'pudge',
            'type' => 'str',
            'is_ranged' => 0,
            'is_radiant' => 0
        ));
        Hero::create(array(
            'name' => 'razor',
            'type' => 'agi',
            'is_ranged' => 1,
            'is_radiant' => 0
        ));
        Hero::create(array(
            'name' => 'sand_king',
            'type' => 'str',
            'is_ranged' => 0,
            'is_radiant' => 0
        ));
        Hero::create(array(
            'name' => 'storm_spirit',
            'type' => 'int',
            'is_ranged' => 1,
            'is_radiant' => 1
        ));
        Hero::create(array(
            'name' => 'sven',
            'type' => 'str',
            'is_ranged' => 0,
            'is_radiant' => 1
        ));
        Hero::create(array(
            'name' => 'tiny',
            'type' => 'str',
            'is_ranged' => 0,
            'is_radiant' => 1
        ));
        Hero::create(array(
            'name' => 'vengefulspirit',
            'type' => 'agi',
            'is_ranged' => 1,
            'is_radiant' => 1
        ));
        Hero::create(array(
            'name' => 'windrunner',
            'type' => 'int',
            'is_ranged' => 1,
            'is_radiant' => 1
        ));
        Hero::create(array(
            'name' => 'zuus',
            'type' => 'int',
            'is_ranged' => 1,
            'is_radiant' => 1
        ));
        Hero::create(array(
            'name' => 'kunkka',
            'type' => 'str',
            'is_ranged' => 0,
            'is_radiant' => 1
        ));
        Hero::create(array(
            'name' => 'lina',
            'type' => 'int',
            'is_ranged' => 1,
            'is_radiant' => 1
        ));
        Hero::create(array(
            'name' => 'lich',
            'type' => 'int',
            'is_ranged' => 1,
            'is_radiant' => 0
        ));
        Hero::create(array(
            'name' => 'lion',
            'type' => 'int',
            'is_ranged' => 1,
            'is_radiant' => 0
        ));
        Hero::create(array(
            'name' => 'shadow_shaman',
            'type' => 'int',
            'is_ranged' => 1,
            'is_radiant' => 1
        ));
        Hero::create(array(
            'name' => 'slardar',
            'type' => 'str',
            'is_ranged' => 0,
            'is_radiant' => 0
        ));
        Hero::create(array(
            'name' => 'tidehunter',
            'type' => 'str',
            'is_ranged' => 0,
            'is_radiant' => 0
        ));
        Hero::create(array(
            'name' => 'witch_doctor',
            'type' => 'int',
            'is_ranged' => 1,
            'is_radiant' => 0
        ));
        Hero::create(array(
            'name' => 'riki',
            'type' => 'agi',
            'is_ranged' => 0,
            'is_radiant' => 1
        ));
        Hero::create(array(
            'name' => 'enigma',
            'type' => 'int',
            'is_ranged' => 1,
            'is_radiant' => 0
        ));
        Hero::create(array(
            'name' => 'tinker',
            'type' => 'int',
            'is_ranged' => 1,
            'is_radiant' => 1
        ));
        Hero::create(array(
            'name' => 'sniper',
            'type' => 'agi',
            'is_ranged' => 1,
            'is_radiant' => 1
        ));
        Hero::create(array(
            'name' => 'necrolyte',
            'type' => 'int',
            'is_ranged' => 1,
            'is_radiant' => 0
        ));
        Hero::create(array(
            'name' => 'warlock',
            'type' => 'int',
            'is_ranged' => 1,
            'is_radiant' => 0
        ));
        Hero::create(array(
            'name' => 'beastmaster',
            'type' => 'str',
            'is_ranged' => 0,
            'is_radiant' => 1
        ));
        Hero::create(array(
            'name' => 'queenofpain',
            'type' => 'int',
            'is_ranged' => 1,
            'is_radiant' => 0
        ));
        Hero::create(array(
            'name' => 'venomancer',
            'type' => 'agi',
            'is_ranged' => 1,
            'is_radiant' => 0
        ));
        Hero::create(array(
            'name' => 'faceless_void',
            'type' => 'agi',
            'is_ranged' => 0,
            'is_radiant' => 0
        ));
        Hero::create(array(
            'name' => 'skeleton_king',
            'type' => 'str',
            'is_ranged' => 0,
            'is_radiant' => 0
        ));
        Hero::create(array(
            'name' => 'death_prophet',
            'type' => 'int',
            'is_ranged' => 1,
            'is_radiant' => 0
        ));
        Hero::create(array(
            'name' => 'phantom_assassin',
            'type' => 'agi',
            'is_ranged' => 0,
            'is_radiant' => 0
        ));
        Hero::create(array(
            'name' => 'pugna',
            'type' => 'int',
            'is_ranged' => 1,
            'is_radiant' => 0
        ));
        Hero::create(array(
            'name' => 'templar_assassin',
            'type' => 'agi',
            'is_ranged' => 1,
            'is_radiant' => 1
        ));
        Hero::create(array(
            'name' => 'viper',
            'type' => 'agi',
            'is_ranged' => 1,
            'is_radiant' => 0
        ));
        Hero::create(array(
            'name' => 'luna',
            'type' => 'agi',
            'is_ranged' => 1,
            'is_radiant' => 1
        ));
        Hero::create(array(
            'name' => 'dragon_knight',
            'type' => 'str',
            'is_ranged' => 0,
            'is_radiant' => 1
        ));
        Hero::create(array(
            'name' => 'dazzle',
            'type' => 'int',
            'is_ranged' => 1,
            'is_radiant' => 0
        ));
        Hero::create(array(
            'name' => 'rattletrap',
            'type' => 'str',
            'is_ranged' => 0,
            'is_radiant' => 1
        ));
        Hero::create(array(
            'name' => 'leshrac',
            'type' => 'int',
            'is_ranged' => 1,
            'is_radiant' => 0
        ));
        Hero::create(array(
            'name' => 'dark_seer',
            'type' => 'int',
            'is_ranged' => 0,
            'is_radiant' => 0
        ));
        Hero::create(array(
            'name' => 'furion',
            'type' => 'int',
            'is_ranged' => 1,
            'is_radiant' => 1
        ));
        Hero::create(array(
            'name' => 'life_stealer',
            'type' => 'str',
            'is_ranged' => 0,
            'is_radiant' => 0
        ));
        Hero::create(array(
            'name' => 'clinkz',
            'type' => 'agi',
            'is_ranged' => 1,
            'is_radiant' => 0
        ));
        Hero::create(array(
            'name' => 'omniknight',
            'type' => 'str',
            'is_ranged' => 0,
            'is_radiant' => 1
        ));
        Hero::create(array(
            'name' => 'enchantress',
            'type' => 'int',
            'is_ranged' => 1,
            'is_radiant' => 1
        ));
        Hero::create(array(
            'name' => 'huskar',
            'type' => 'str',
            'is_ranged' => 1,
            'is_radiant' => 1
        ));
        Hero::create(array(
            'name' => 'night_stalker',
            'type' => 'str',
            'is_ranged' => 0,
            'is_radiant' => 0
        ));
        Hero::create(array(
            'name' => 'broodmother',
            'type' => 'agi',
            'is_ranged' => 0,
            'is_radiant' => 0
        ));
        Hero::create(array(
            'name' => 'bounty_hunter',
            'type' => 'agi',
            'is_ranged' => 0,
            'is_radiant' => 1
        ));
        Hero::create(array(
            'name' => 'weaver',
            'type' => 'agi',
            'is_ranged' => 1,
            'is_radiant' => 0
        ));
        Hero::create(array(
            'name' => 'jakiro',
            'type' => 'int',
            'is_ranged' => 1,
            'is_radiant' => 1
        ));
        Hero::create(array(
            'name' => 'batrider',
            'type' => 'int',
            'is_ranged' => 1,
            'is_radiant' => 0
        ));
        Hero::create(array(
            'name' => 'chen',
            'type' => 'int',
            'is_ranged' => 1,
            'is_radiant' => 1
        ));
        Hero::create(array(
            'name' => 'spectre',
            'type' => 'agi',
            'is_ranged' => 0,
            'is_radiant' => 0
        ));
        Hero::create(array(
            'name' => 'doom_bringer',
            'type' => 'str',
            'is_ranged' => 0,
            'is_radiant' => 0
        ));
        Hero::create(array(
            'name' => 'ancient_apparition',
            'type' => 'int',
            'is_ranged' => 1,
            'is_radiant' => 0
        ));
        Hero::create(array(
            'name' => 'ursa',
            'type' => 'agi',
            'is_ranged' => 0,
            'is_radiant' => 1
        ));
        Hero::create(array(
            'name' => 'spirit_breaker',
            'type' => 'str',
            'is_ranged' => 0,
            'is_radiant' => 0
        ));
        Hero::create(array(
            'name' => 'gyrocopter',
            'type' => 'agi',
            'is_ranged' => 1,
            'is_radiant' => 1
        ));
        Hero::create(array(
            'name' => 'alchemist',
            'type' => 'str',
            'is_ranged' => 0,
            'is_radiant' => 1
        ));
        Hero::create(array(
            'name' => 'invoker',
            'type' => 'int',
            'is_ranged' => 1,
            'is_radiant' => 0
        ));
        Hero::create(array(
            'name' => 'silencer',
            'type' => 'int',
            'is_ranged' => 1,
            'is_radiant' => 1
        ));
        Hero::create(array(
            'name' => 'obsidian_destroyer',
            'type' => 'int',
            'is_ranged' => 1,
            'is_radiant' => 0
        ));
        Hero::create(array(
            'name' => 'lycan',
            'type' => 'str',
            'is_ranged' => 0,
            'is_radiant' => 0
        ));
        Hero::create(array(
            'name' => 'brewmaster',
            'type' => 'str',
            'is_ranged' => 0,
            'is_radiant' => 1
        ));
        Hero::create(array(
            'name' => 'shadow_demon',
            'type' => 'int',
            'is_ranged' => 1,
            'is_radiant' => 0
        ));
        Hero::create(array(
            'name' => 'lone_druid',
            'type' => 'agi',
            'is_ranged' => 1,
            'is_radiant' => 1
        ));
        Hero::create(array(
            'name' => 'chaos_knight',
            'type' => 'str',
            'is_ranged' => 0,
            'is_radiant' => 0
        ));
        Hero::create(array(
            'name' => 'meepo',
            'type' => 'agi',
            'is_ranged' => 0,
            'is_radiant' => 0
        ));
        Hero::create(array(
            'name' => 'nyx_assassin',
            'type' => 'agi',
            'is_ranged' => 0,
            'is_radiant' => 0
        ));
        Hero::create(array(
            'name' => 'treant',
            'type' => 'str',
            'is_ranged' => 0,
            'is_radiant' => 1
        ));
        Hero::create(array(
            'name' => 'ogre_magi',
            'type' => 'int',
            'is_ranged' => 0,
            'is_radiant' => 1
        ));
        Hero::create(array(
            'name' => 'undying',
            'type' => 'str',
            'is_ranged' => 0,
            'is_radiant' => 0
        ));
        Hero::create(array(
            'name' => 'rubick',
            'type' => 'int',
            'is_ranged' => 1,
            'is_radiant' => 1
        ));
        Hero::create(array(
            'name' => 'disruptor',
            'type' => 'int',
            'is_ranged' => 1,
            'is_radiant' => 1
        ));
        Hero::create(array(
            'name' => 'naga_siren',
            'type' => 'agi',
            'is_ranged' => 0,
            'is_radiant' => 1
        ));
        Hero::create(array(
            'name' => 'keeper_of_the_light',
            'type' => 'int',
            'is_ranged' => 1,
            'is_radiant' => 1
        ));
        Hero::create(array(
            'name' => 'wisp',
            'type' => 'str',
            'is_ranged' => 1,
            'is_radiant' => 1
        ));
        Hero::create(array(
            'name' => 'visage',
            'type' => 'int',
            'is_ranged' => 1,
            'is_radiant' => 0
        ));
        Hero::create(array(
            'name' => 'slark',
            'type' => 'agi',
            'is_ranged' => 0,
            'is_radiant' => 0
        ));
        Hero::create(array(
            'name' => 'medusa',
            'type' => 'agi',
            'is_ranged' => 1,
            'is_radiant' => 0
        ));
        Hero::create(array(
            'name' => 'troll_warlord',
            'type' => 'agi',
            'is_ranged' => 1,
            'is_radiant' => 1
        ));
        Hero::create(array(
            'name' => 'ember_spirit',
            'type' => 'agi',
            'is_ranged' => 0,
            'is_radiant' => 1
        ));
        Hero::create(array(
            'name' => 'centaur',
            'type' => 'str',
            'is_ranged' => 0,
            'is_radiant' => 1
        ));
        Hero::create(array(
            'name' => 'magnataur',
            'type' => 'str',
            'is_ranged' => 0,
            'is_radiant' => 0
        ));
        Hero::create(array(
            'name' => 'shredder',
            'type' => 'str',
            'is_ranged' => 0,
            'is_radiant' => 1
        ));
        Hero::create(array(
            'name' => 'bristleback',
            'type' => 'str',
            'is_ranged' => 0,
            'is_radiant' => 1
        ));
        Hero::create(array(
            'name' => 'tusk',
            'type' => 'str',
            'is_ranged' => 0,
            'is_radiant' => 1
        ));
        Hero::create(array(
            'name' => 'skywrath_mage',
            'type' => 'int',
            'is_ranged' => 1,
            'is_radiant' => 1
        ));
        Hero::create(array(
            'name' => 'abaddon',
            'type' => 'str',
            'is_ranged' => 0,
            'is_radiant' => 0
        ));
        Hero::create(array(
            'name' => 'elder_titan',
            'type' => 'str',
            'is_ranged' => 0,
            'is_radiant' => 1
        ));
        Hero::create(array(
            'name' => 'legion_commander',
            'type' => 'str',
            'is_ranged' => 0,
            'is_radiant' => 1
        ));
        Hero::create(array(
            'name' => 'earth_spirit',
            'type' => 'str',
            'is_ranged' => 0,
            'is_radiant' => 1
        ));
    }
}
