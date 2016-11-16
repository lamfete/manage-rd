<?php

use Illuminate\Database\Seeder;
use App\MasterReksadana;

class MasterReksadanasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker\Factory::create();

      foreach (range(1, 10) as $index) {
        MasterReksadana::create([
          'name' => $faker->words($nb = 3),
          'type' => $faker->words($nb = 1)
        ]);
      }
    }
}
