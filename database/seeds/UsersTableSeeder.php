<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Joss',
            'email'=>'josy.bjos@gmail.com',
            'password'=>bcrypt(12345678)
        ]);
        User::create([
            'name' => 'Ronald',
            'email'=>'roalmollericona@gmail.com',
            'password'=>bcrypt(12345678)
        ]);
    }
}
