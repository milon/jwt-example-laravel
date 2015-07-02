<?php

use Illuminate\Database\Seeder;
use App\User;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        User::insert([
        	[
        		'name'		=> 'Milon',
        		'email'		=> 'milon@wedevs.com',
        		'password'	=> bcrypt('weDevs'),
        		'created_at'=> Carbon::now(),
        		'updated_at'=> Carbon::now()
        	],
        	[
        		'name'		=> 'Talha',
        		'email'		=> 'talha@wedevs.com',
        		'password'	=> bcrypt('weDevs'),
        		'created_at'=> Carbon::now(),
        		'updated_at'=> Carbon::now()
        	],
        	[
        		'name'		=> 'Sadek',
        		'email'		=> 'sadek@wedevs.com',
        		'password'	=> bcrypt('weDevs'),
        		'created_at'=> Carbon::now(),
        		'updated_at'=> Carbon::now()
        	],
        	[
        		'name'		=> 'Ashik',
        		'email'		=> 'ashik@wedevs.com',
        		'password'	=> bcrypt('weDevs'),
        		'created_at'=> Carbon::now(),
        		'updated_at'=> Carbon::now()
        	],
        	[
        		'name'		=> 'Mahbub',
        		'email'		=> 'mahbub@wedevs.com',
        		'password'	=> bcrypt('weDevs'), 
        		'created_at'=> Carbon::now(),
        		'updated_at'=> Carbon::now()
        	],
        	[
        		'name'		=> 'Rana',
        		'email'		=> 'rana@wedevs.com',
        		'password'	=> bcrypt('weDevs'),
        		'created_at'=> Carbon::now(),
        		'updated_at'=> Carbon::now()
        	]
    	]);
    }
}
