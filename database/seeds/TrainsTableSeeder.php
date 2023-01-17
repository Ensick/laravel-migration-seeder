<?php

use Illuminate\Database\Seeder;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trains = [

            [
                'train_name' => 'Shinkansen',
                'departure_time'=> '15:30',
                'arrival_time' => '16:15',
                'departure_station'=> 'Tokyo',
                'arrival_station' => 'Osaka',
                'price' => 79.99,

            ]

        ];

        foreach($trains as $elem){

            $newTrain = new Train();
            $newTrain -> train_name = $elem['train_name'];
            $newTrain -> departure_time = $elem['departure_time'];
            $newTrain -> arrival_time = $elem['arrival_time'];
            $newTrain -> departure_station = $elem['departure_station'];
            $newTrain -> arrival_station = $elem['arrival_station'];
            $newTrain -> price = $elem['price'];
            $newTrain ->save();
        }




    }
}
