<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::insert([
            [
                'customer_name'=>'md Emon Hossen',
                'price'=>'48,00,000'
            ],
            [
                'customer_name'=>' rubaiya Hossen',
                'price'=>'58,00,000'
            ],
            [
                'customer_name'=>' rabiya Hossen',
                'price'=>'78,00,000'
            ],
            [
                'customer_name'=>'md rimon Hossen',
                'price'=>'58,00,000'
            ],
            [
                'customer_name'=>'md riman Hossen',
                'price'=>'98,00,000'
            ],

        ]);
    }
}
