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
            'province_id' => 1,
            'civil_state_id' => 1,
            'role_id' => 1,
            'name' => 'Joss',
            'first_name' => 'Y',
            'last_name' => 'Ch',
            'ci' => 545334,
            'email'=>'josy.bjos@gmail.com',
            'password'=>bcrypt(12345678),
            'gender' => 1,
            'address' => 'aaaaa',
            'mobil' => 77664545,
            'day' => 4,
            'month' => 5,
            'year' => 1995,
            'service_years' => 1,
        ]);
    }
}
