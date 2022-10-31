<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name'	    => 'M Nur Hadi',
                'point'     => 20000000,
                'email'	    => 'saya@mnurhad.com',
                'password'	=> bcrypt('password'),
            ]
        ];
         // looping users
         foreach($users as $user) {
            User::create($user);
         }
    }
}
