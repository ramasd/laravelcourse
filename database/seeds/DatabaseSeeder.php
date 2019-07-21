<?php

use Illuminate\Database\Seeder;
use App\Type;
use App\City;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Eloquent::unguard();

        Type::create(
            array(
                'title' => 'lauko aikštelė',
            )
        );
        Type::create(
            array(
                'title' => 'sporto salė',
            )
        );
        Type::create(
            array(
                'title' => 'privati aikštelė',
            )   
        );

        City::create(
            array(
                'title' => 'Vilnius',
            )
        );
        City::create(
            array(
                'title' => 'Kaunas',
            )
        );
        City::create(
            array(
                'title' => 'Klaipėda',
            )
        );
        City::create(
            array(
                'title' => 'Zarasai',
            )
        );
        User::create(
            array(
                'name' => 'testname',
                'email' => 'test@test.com',
                'password' =>Hash::make('test1234'),
            )
        );

    }
}
