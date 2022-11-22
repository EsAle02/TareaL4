<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Venta;

class VentaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *d
     * @return void
     */
    public function run()
    {
        //
        Venta::factory(500)->create();
    }
}
