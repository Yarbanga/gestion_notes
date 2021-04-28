<?php


use App\Classe;
use Illuminate\Database\Seeder;

class ClasseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('classes')->insert([

            ['id' => '1', 'classe' => '6ème'],
            ['id' => '2', 'classe' => '5ème'],
            ['id' => '3', 'classe' => '4ème'],
            ['id' => '4', 'classe' => '3ème'],
            ['id' => '5', 'classe' => '2nd'],
            ['id' => '6', 'classe' => '1ère'],
            ['id' => '7', 'classe' => 'tl'],
            ['id' => '8', 'classe' => 'tlA'],
            ['id' => '9', 'classe' => 'tlD'],
            ['id' => '10', 'classe' => 'tlC'],
           
        ]); 
    }
}
