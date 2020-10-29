<?php

use Illuminate\Database\Seeder;
use esemka\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'BKK',
            'email' => 'admin@kawankoding.id',
            'password' => bcrypt('12345678'),
        ]);

        $admin->assignRole('bkk');

        $user = User::create([
            'name' => 'User',
            'email' => 'user@kawankoding.id',
            'password' => bcrypt('12345678'),
        ]);

        $user->assignRole('user');
    }
}