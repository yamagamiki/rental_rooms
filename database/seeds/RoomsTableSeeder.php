<?php

use Illuminate\Database\Seeder;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         DB::table('rooms')->insert([
        	[
            'id' => '1',
            'type' => 'A',
            'price' => '1500',
            'created_at' => date('Y-m-d H:i:s'),
        	'updated_at' => date('Y-m-d H:i:s'),
        	],


        	[
            'id' => '2',
            'type' => 'B',
            'price' => '2500',
            'created_at' => date('Y-m-d H:i:s'),
        	'updated_at' => date('Y-m-d H:i:s'),
        	],

        	[
            'id' => '3',
            'type' => 'C',
            'price' => '5000',
            'created_at' => date('Y-m-d H:i:s'),
        	'updated_at' => date('Y-m-d H:i:s'),
        	],


        	[
            'id' => '4',
            'type' => 'A',
            'price' => '1500',
            'created_at' => date('Y-m-d H:i:s'),
        	'updated_at' => date('Y-m-d H:i:s'),
        	],


        	[
            'id' => '5',
            'type' => 'B',
            'price' => '2500',
            'created_at' => date('Y-m-d H:i:s'),
        	'updated_at' => date('Y-m-d H:i:s'),
        	],

        	[
            'id' => '6',
            'type' => 'C',
            'price' => '5000',
            'created_at' => date('Y-m-d H:i:s'),
        	'updated_at' => date('Y-m-d H:i:s'),
        	],

        	[
            'id' => '7',
            'type' => 'A',
            'price' => '1500',
            'created_at' => date('Y-m-d H:i:s'),
        	'updated_at' => date('Y-m-d H:i:s'),
        	],


        	[
            'id' => '8',
            'type' => 'B',
            'price' => '2500',
            'created_at' => date('Y-m-d H:i:s'),
        	'updated_at' => date('Y-m-d H:i:s'),
        	],

        	[
            'id' => '9',
            'type' => 'C',
            'price' => '5000',
            'created_at' => date('Y-m-d H:i:s'),
        	'updated_at' => date('Y-m-d H:i:s'),
        	],

        	[
            'id' => '10',
            'type' => 'C',
            'price' => '5000',
            'created_at' => date('Y-m-d H:i:s'),
        	'updated_at' => date('Y-m-d H:i:s'),
        	],
        ]);
    }
}
