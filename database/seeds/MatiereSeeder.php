<?php

use App\Matiere;
use Illuminate\Database\Seeder;

class MatiereSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('matieres')->insert([
            ['id' => '1', 'matiere' => 'Histoire'],
            ['id' => '2', 'matiere' => 'Géo'],
            ['id' => '3', 'matiere' => 'Français'],
            ['id' => '4', 'matiere' => 'Anglais'],
            ['id' => '5', 'matiere' => 'SVT'],
            ['id' => '6', 'matiere' => 'Maths'],
            ['id' => '7', 'matiere' => 'Physique'],
            ['id' => '8', 'matiere' => 'Chimie'],
            ['id' => '9', 'matiere' => 'mathematique'],
            ['id' => '10', 'matiere' => 'couture']
        ]);   
    }
}
