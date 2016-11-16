<?php

use Illuminate\Database\Seeder;
use App\HistoryReksadana as HistoryReksadana;

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

      foreach(range(1, 10) as $index) {
        HistoryReksadana::create([
          'rd_id' => $faker->randomDigitNotNull,
          'nominal' => $faker->numberBetween($min = 499, $max = 10000),
          'created_at' => $faker->unixTime($max = 'now'),
          'updated_at' => $faker->unixTime($max = 'now')
        ]);
      }
    }
}
