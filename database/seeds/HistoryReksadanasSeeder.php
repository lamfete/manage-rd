<?php

use Illuminate\Database\Seeder;
use App\HistoryReksadana;

class HistoryReksadanasSeeder extends Seeder
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
        HistoryReksadana::create([
          'rd_id' => $faker->randomDigitNotNull,
          'nominal' => $faker->numberBetween($min = 499999, $ max = 10000000)
        ]);
      }
    }
}
