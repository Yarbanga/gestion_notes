<?php

use Illuminate\Database\Seeder;
use App\Matiereshool;

class MatiereshoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('matiereshools')->insert([
            ['id' => '1', 'matiereshool' => 'Histoire'],
            ['id' => '2', 'matiereshool' => 'Géo'],
            ['id' => '3', 'matiereshool' => 'Français'],
            ['id' => '4', 'matiereshool' => 'Anglais'],
            ['id' => '5', 'matiereshool' => 'SVT'],
            ['id' => '6', 'matiereshool' => 'Maths'],
            ['id' => '7', 'matiereshool' => 'Physique'],
            ['id' => '8', 'matiereshool' => 'Chimie'],
            ['id' => '9', 'matiereshool' => 'mathematique'],
            ['id' => '10', 'matiereshool' => 'couture'],
            ['id' => '11', 'matiereshool' => 'eps'],
        ]);  
    }
}
