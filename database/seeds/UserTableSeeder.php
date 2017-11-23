<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Array con la informaion del usuario Admin y el Usuario cliente

        $data = array(
        	[
        		'name'		=> 'Admin',
        		'last_name'	=> 'Garcia',
        		'email'		=> 'adminGarcia@gmail.com',
        		'user'		=> 'AdminG',
        		'password'	=> \Hash::make('123456'),
        		'type'		=> 'admin',
        		'active'	=> 1,
        		'address'	=> 'Calle 1 4-25, Centro, Cúcuta',
        		'created_at'=> new DateTime,
        		'updated_at'=> new DateTime
        	],
        	[
        		'name'		=> 'Juanito',
        		'last_name'	=> 'Perez',
        		'email'		=> 'juanitop@gmail.com',
        		'user'		=> 'Juanitopz',
        		'password'	=> \Hash::make('123456'),
        		'type'		=> 'user',
        		'active'	=> 1,
        		'address'	=> 'Av. 11 4-85, Centro, Cúcuta',
        		'created_at'=> new DateTime,
        		'updated_at'=> new DateTime
        	]
        );
        User::insert($data);
    }
}
