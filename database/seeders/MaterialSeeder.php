<?php

namespace Database\Seeders;

use App\Models\Material;
use Illuminate\Database\Seeder;

class MaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Material::insert([
            ['material_name'=>'Laptop'],
            ['material_name'=>'PC'],
            ['material_name'=>'Watch']
        ]);
    }
}
