<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\LocalGov;

class LocalGovSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\LocalGov::factory(5)->create();
        LocalGov::create([
            'name' => 'Batsari',
            'state_id' => 1,
        ]);
    }
}
