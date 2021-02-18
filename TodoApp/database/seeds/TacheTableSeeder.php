<?php

use Illuminate\Database\Seeder;

class TacheTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Tache::class,20)->create();
    }
}
