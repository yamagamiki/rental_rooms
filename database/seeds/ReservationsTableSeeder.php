<?php

use Illuminate\Database\Seeder;

class ReservationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('reservations')->insert([
        	[
            'id' => '1',
            'user_id' => '1',
            'room_id' => '1',
            'date' => date('Y-m-d'),
            'time' => '11時30分',
            'event_name' => 'イベント1',
            'organizer' => 'taro',
            'person' => '5',
            'detail' => '定例会議',
            'rental' => 'スクリーン',
            'created_at' => date('Y-m-d H:i:s'),
        	'updated_at' => date('Y-m-d H:i:s'),
        	],


        	[
            'id' => '2',
            'user_id' => '2',
            'room_id' => '2',
            'date' => date('Y-m-d'),
            'time' => '12時30分',
            'event_name' => 'イベント2',
            'organizer' => 'ziro',
            'person' => '5',
            'detail' => '定例会議2',
            'rental' => 'スクリーン',
            'created_at' => date('Y-m-d H:i:s'),
        	'updated_at' => date('Y-m-d H:i:s'),
        	],


        	[
            'id' => '3',
            'user_id' => '3',
            'room_id' => '3',
            'date' => date('Y-m-d'),
            'time' => '13時30分',
            'event_name' => 'イベント3',
            'organizer' => 'saburo',
            'person' => '5',
            'detail' => '定例会議3',
            'rental' => 'スクリーン',
            'created_at' => date('Y-m-d H:i:s'),
        	'updated_at' => date('Y-m-d H:i:s'),
        	],



        	[
            'id' => '4',
            'user_id' => '4',
            'room_id' => '4',
            'date' => date('Y-m-d'),
            'time' => '14時30分',
            'event_name' => 'イベント4',
            'organizer' => 'shiro',
            'person' => '5',
            'detail' => '定例会議4',
            'rental' => 'スクリーン',
            'created_at' => date('Y-m-d H:i:s'),
        	'updated_at' => date('Y-m-d H:i:s'),
        	],


        	[
            'id' => '5',
            'user_id' => '5',
            'room_id' => '5',
            'date' => date('Y-m-d'),
            'time' => '15時30分',
            'event_name' => 'イベント5',
            'organizer' => 'goro',
            'person' => '5',
            'detail' => '定例会議5',
            'rental' => 'スクリーン',
            'created_at' => date('Y-m-d H:i:s'),
        	'updated_at' => date('Y-m-d H:i:s'),
        	],


        	[
            'id' => '6',
            'user_id' => '6',
            'room_id' => '6',
            'date' => date('Y-m-d'),
            'time' => '16時30分',
            'event_name' => 'イベント6',
            'organizer' => 'rokuro',
            'person' => '6',
            'detail' => '定例会議6',
            'rental' => 'スクリーン',
            'created_at' => date('Y-m-d H:i:s'),
        	'updated_at' => date('Y-m-d H:i:s'),
        	],
        	[
            'id' => '7',
            'user_id' => '7',
            'room_id' => '7',
            'date' => date('Y-m-d'),
            'time' => '17時30分',
            'event_name' => 'イベント7',
            'organizer' => 'nanaro',
            'person' => '5',
            'detail' => '定例会議7',
            'rental' => 'スクリーン',
            'created_at' => date('Y-m-d H:i:s'),
        	'updated_at' => date('Y-m-d H:i:s'),
        	],


        	[
            'id' => '8',
            'user_id' => '8',
            'room_id' => '8',
            'date' => date('Y-m-d'),
            'time' => '18時30分',
            'event_name' => 'イベント8',
            'organizer' => 'hachiro',
            'person' => '5',
            'detail' => '定例会議8',
            'rental' => 'スクリーン',
            'created_at' => date('Y-m-d H:i:s'),
        	'updated_at' => date('Y-m-d H:i:s'),
        	],


        	[
            'id' => '9',
            'user_id' => '9',
            'room_id' => '9',
            'date' => date('Y-m-d'),
            'time' => '12時30分',
            'event_name' => 'イベント9',
            'organizer' => 'kyuro',
            'person' => '5',
            'detail' => '定例会議9',
            'rental' => 'スクリーン',
            'created_at' => date('Y-m-d H:i:s'),
        	'updated_at' => date('Y-m-d H:i:s'),
        	],



        	[
            'id' => '10',
            'user_id' => '10',
            'room_id' => '10',
            'date' => date('Y-m-d'),
            'time' => '13時30分',
            'event_name' => 'イベント10',
            'organizer' => 'zyuro',
            'person' => '5',
            'detail' => '定例会議10',
            'rental' => 'スクリーン',
            'created_at' => date('Y-m-d H:i:s'),
        	'updated_at' => date('Y-m-d H:i:s'),
        	],
        ]);
    }
}
