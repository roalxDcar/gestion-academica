<?php

use Illuminate\Database\Seeder;
use App\CivilState;

class CivilStatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CivilState::create([
            'description' => 'Soltero'
        ]);
    }
}
