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
       
          $this->call(IntroTableSeeder::class);
          $this->call(ServiceTableSeeder::class);
          $this->call(PortfolioTableSeeder::class);
          $this->call(TeamTableSeeder::class);
          $this->call(TestimonialTableSeeder::class);
          $this->call(ContactTableSeeder::class);
    }
}
