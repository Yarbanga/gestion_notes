<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesTableSeeder::class);
        $this->call(UserSeeder::class);
        // $this->call(MatiereSeeder::class);
        $this->call(ClasseSeeder::class);
         $this->call(MatiereshoolSeeder::class);
    }

}
