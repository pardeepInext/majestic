<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            't-shirt' => 'tshirt.png',
            'shirt' => 'shirt.png',
            'shoes' => 'shoes.png',
            'suits' => 'suits.jpg',
            'bags' => 'bags.jpg',
            'jackets' => 'jackets.jpg',
            'watches' => 'watches.jpg'
        ];

        foreach ($categories as $name => $image)
            Category::create(compact('name', 'image'));
    }
}
