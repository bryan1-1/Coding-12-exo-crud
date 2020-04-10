<?php

use Illuminate\Database\Seeder;
use App\Testimonial;
class TestimonialTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Testimonial::class,10)->create();
    }
}
