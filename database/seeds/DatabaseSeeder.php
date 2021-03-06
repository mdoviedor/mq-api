<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PopulateCarriers::class);
        $this->call(PopulateProviders::class);
        $this->call(PopulateUsers::class);
        $this->call(PopulateProducts::class);
        $this->call(PopulateInventory::class);
        $this->call(PopulateOrders::class);
        $this->call(PopulateProductProvider::class);
    }
}
