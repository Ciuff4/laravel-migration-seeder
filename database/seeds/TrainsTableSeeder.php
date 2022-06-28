<?php
use App\Train;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i<100;$i++){
            $new_train= new Train();
            $new_train->company= $faker->word();
            $new_train->start_station= $faker->dateTime();
            $new_train->end_station= $faker->dateTime();
            $new_train->departure_time= $faker->dateTime();
            $new_train->arrival_time= $faker->dateTime();
            $new_train->train_number= $faker->randomDigit(9);
            $new_train->coaches_number= $faker->randomDigit();
            $new_train->is_onTime= $faker->boolean();
            $new_train->is_Cancelled= $faker->boolean();
        }
    }
}
