<?php

use Illuminate\Database\Seeder;
use App\MasterReksadana as MasterReksadana;

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

      foreach(range(1, 10) as $index) {
        MasterReksadana::create([
          'name' => $faker->name,
          'type' => $faker->word,
          'created_at' => $faker->unixTime($max = 'now'),
          'updated_at' => $faker->unixTime($max = 'now')
        ]);
      }
    }
}
