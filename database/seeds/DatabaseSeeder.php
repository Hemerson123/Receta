<?php

use Illuminate\Database\Seeder;
use App\Receta;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $recetas= factory(Receta::class,6) ->create();
    }
}
