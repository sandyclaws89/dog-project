<?php

use Illuminate\Database\Seeder;
use App\Dog;
use Faker\Generator as Faker;

class DogSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=1; $i <= 100 ; $i++) {
            $dogData = [
                  // 'id'                =>  0,
                  'name'              =>  $faker->word(),
                  'age'               =>  $faker->numberBetween(0, 20),
                  'genre'             =>  $faker->randomElement(['M', 'F']),
                  'chip_number'       =>  $faker->bothify('?????-#####'),
                  'race'              =>  $faker->word(),
                  'post_title'        =>  $faker->sentence(2),
                  'image'             =>  $faker->imageUrl(350, 400, 'animals', true, 'dogs', true),
                  'size'              =>  $faker->randomElement(['M', 'F']),
                  'adopted'           =>  $faker->boolean(),
                  'description'       =>  $faker->text(),
                  'particular_sign'   =>  $faker->sentence(2),
                  'check_in'          =>  $faker->dateTime(),
                  'check_out'         =>  $faker->dateTime(),
            ];
            $dog = new Dog();
            $dog->fill($dogData);
            $dog->save();
        }
    }
}
