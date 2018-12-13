<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      //call tables seeders separatly
      $this->call(VehicleMakesTableSeeder::class);
      $this->call(VehicleModelsTableSeeder::class);
      $this->call(VehicleTypesTableSeeder::class);
    }
}
