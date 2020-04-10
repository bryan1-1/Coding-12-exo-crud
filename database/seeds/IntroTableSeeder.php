<?php

use Illuminate\Database\Seeder;
use App\Intro;

class IntroTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Intro::class,2)->create();
    }
}
