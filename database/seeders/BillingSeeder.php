<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Billing;

class BillingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Billing::insert([
            ['name' => 'gdg', 'invoice' => rand(1000,9000)],
            ['name' => 'fgdf', 'invoice' => rand(1000,9000)],
            ['name' => 'dgf', 'invoice' => rand(1000,9000)],
            ['name' => 'gfd', 'invoice' => rand(1000,9000)],
            ['name' => 'gdf', 'invoice' => rand(1000,9000)],
            ['name' => 'gd', 'invoice' => rand(1000,9000)],
            ['name' => 'gfdgre', 'invoice' => rand(1000,9000)],
            ['name' => 'jytjt', 'invoice' => rand(1000,9000)],
        ]);
    }
}
