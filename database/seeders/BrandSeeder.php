<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Brand::insert([
            ['name' => "Apple"],
            ['name' => "HP"],
            ['name' => "Microsoft"],
            ['name' => "Dell"],
            ['name' => "Samsung"],
            ['name' => "Lenovo"],
            ['name' => "Asus"],
            ['name' => "Acer"],
        ]);

    }
}
