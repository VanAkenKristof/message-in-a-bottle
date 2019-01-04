<?php

use App\Photo;
use Illuminate\Database\Seeder;

class PhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        $dateTime = \Carbon\Carbon::create(2018, 8, 11, 12, 22, 31);

        for ($i = 0; $i < 10; $i++) {
            $photo = new Photo();
            $photo->name = str_pad($i+1, 3, '0', STR_PAD_LEFT);
            $photo->setCreatedAt($dateTime);
            $photo->setUpdatedAt($dateTime);
            $photo->save();

            $dateTime = $faker->dateTimeBetween($dateTime, \Carbon\Carbon::now());
        }
    }
}
