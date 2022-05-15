<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	[
            'id' => '1',
            'name' => 'taro',
            'reservation_number' => '1',
            'tell' => '080-0000-0001',
            'email' => 'test@gmail.com',
            'password' => Hash::make('testtest'),
            'created_at' => date('Y-m-d H:i:s'),
        	'updated_at' => date('Y-m-d H:i:s'),
        	],


        	[
            'id' => '2',
            'name' => 'ziro',
            'reservation_number' => '2',
            'tell' => '080-0000-0002',
            'email' => 'test2@gmail.com',
            'password' => Hash::make('testtest2'),
            'created_at' => date('Y-m-d H:i:s'),
        	'updated_at' => date('Y-m-d H:i:s'),
        	],

        	[
            'id' => '3',
            'name' => 'saburo',
            'reservation_number' => '3',
            'tell' => '080-0000-0003',
            'email' => 'test3@gmail.com',
            'password' => Hash::make('testtest3'),
            'created_at' => date('Y-m-d H:i:s'),
        	'updated_at' => date('Y-m-d H:i:s'),
        	],


        	[
            'id' => '4',
            'name' => 'shiro',
            'reservation_number' => '4',
            'tell' => '080-0000-0004',
            'email' => 'test4@gmail.com',
            'password' => Hash::make('testtest4'),
            'created_at' => date('Y-m-d H:i:s'),
        	'updated_at' => date('Y-m-d H:i:s'),
        	],

        	[
            'id' => '5',
            'name' => 'goro',
            'reservation_number' => '5',
            'tell' => '080-0000-0005',
            'email' => 'test5@gmail.com',
            'password' => Hash::make('testtest5'),
            'created_at' => date('Y-m-d H:i:s'),
        	'updated_at' => date('Y-m-d H:i:s'),
        	],

        	[
            'id' => '6',
            'name' => 'rokuro',
            'reservation_number' => '6',
            'tell' => '080-0000-0006',
            'email' => 'test6@gmail.com',
            'password' => Hash::make('testtest6'),
            'created_at' => date('Y-m-d H:i:s'),
        	'updated_at' => date('Y-m-d H:i:s'),
        	],

        	[
            'id' => '7',
            'name' => 'nanaro',
            'reservation_number' => '7',
            'tell' => '080-0000-0007',
            'email' => 'test7@gmail.com',
            'password' => Hash::make('testtest7'),
            'created_at' => date('Y-m-d H:i:s'),
        	'updated_at' => date('Y-m-d H:i:s'),
        	],

        	[
            'id' => '8',
            'name' => 'hachiro',
            'reservation_number' => '8',
            'tell' => '080-0000-0008',
            'email' => 'test8@gmail.com',
            'password' => Hash::make('testtest8'),
            'created_at' => date('Y-m-d H:i:s'),
        	'updated_at' => date('Y-m-d H:i:s'),
        	],

        	[
            'id' => '9',
            'name' => 'kyuro',
            'reservation_number' => '9',
            'tell' => '080-0000-0009',
            'email' => 'test9@gmail.com',
            'password' => Hash::make('testtest9'),
            'created_at' => date('Y-m-d H:i:s'),
        	'updated_at' => date('Y-m-d H:i:s'),
        	],

        	[
            'id' => '10',
            'name' => 'zyuro',
            'reservation_number' => '10',
            'tell' => '080-0000-0010',
            'email' => 'test10@gmail.com',
            'password' => Hash::make('testtest10'),
            'created_at' => date('Y-m-d H:i:s'),
        	'updated_at' => date('Y-m-d H:i:s'),
        	],
        ]);
    }

}
