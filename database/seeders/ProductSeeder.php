<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'one plus 8',
                'image' => 'oneplus8.jpg',
                'description' => 'fastest phone',
                'price' => '45000/-'
            ],
            [
                'name' => 'Dell',
                'image' => 'delllaptop.jpg',
                'description' => 'fastest laptop',
                'price' => '55000/-'
            ],
            [
                'name' => 'SS Bat',
                'image' => 'ssbat.jpg',
                'description' => 'light weight',
                'price' => '5000/-'
            ],
            [
                'name' => 'iphone 12',
                'image' => 'iphone12.jpg',
                'description' => 'latest technology in this phone',
                'price' => '89000/-'
            ],
            [
                'name' => 'Nike Hoodie',
                'image' => 'nike.jpeg',
                'description' => 'Very High Quality Material',
                'price' => '1999/-'
            ],
            [
                'name' => 'Puma Shoes',
                'image' => 'puma.jpg',
                'description' => 'light Weight',
                'price' => '3500/-'
            ],
            [
                'name' => 'Shirt',
                'image' => 'shirts.jpg',
                'description' => '100% Cotton Material',
                'price' => '999/-'
            ],
            [
                'name' => 'T-Shirt',
                'image' => 'tshirt.jpg',
                'description' => '220GSM Hosiery Material',
                'price' => '799/-'
            ],

        ]);
    }
}
