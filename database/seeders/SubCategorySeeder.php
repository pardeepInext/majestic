<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SubCategory;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subCategories = [
            [
                'name' => "bagpack",
                'image' => 'bagpack.png',
                'category_id' => 5,
                'user_type_id' => 1
            ],
            [
                'name' => "vanity bag",
                'image' => 'vanity_bag.png',
                'category_id' => 5,
                'user_type_id' => 3

            ],
            [
                'name' => "laptop bag",
                'image' => 'laptop_bag.jpeg',
                'category_id' => 5,
                'user_type_id' => 1
            ],
            [
                'name' => "monk strap",
                'image' => 'monk_strap.jpg',
                'category_id' => 3,
                'user_type_id' => 2
            ],
            [
                'name' => "high heels",
                'image' => 'high_heels.png',
                'category_id' => 5,
                'user_type_id' => 3
            ],
            [
                'name' => "flat hills",
                'image' => 'flat_hills.png',
                'category_id' => 5,
                'user_type_id' => 3
            ],
            [
                'name' => "flip flop",
                'image' => 'flip_flops.png',
                'category_id' => 5,
                'user_type_id' => 1
            ],
            [
                'name' => "sneakers",
                'image' => 'sneakers.png',
                'category_id' => 5,
                'user_type_id' => 1
            ],
            [
                'name' => "sports",
                'image' => 'sports.png',
                'category_id' => 5,
                'user_type_id' => 1
            ],
            [
                'name' => "sports",
                'image' => 'sports.png',
                'category_id' => 5,
                'user_type_id' => 1
            ],
            [
                'name' => "sports shoes",
                'image' => 'sports.png',
                'category_id' => 5,
                'user_type_id' => 1
            ],
            [
                'name' => "leather jackets",
                'image' => 'leather_jacket_men.jpg',
                'category_id' => 6,
                'user_type_id' => 2
            ],
            [
                'name' => "leather jackets",
                'image' => 'lather_jacket_women.jpg',
                'category_id' => 6,
                'user_type_id' => 3
            ],
            [
                'name' => "bomber jackets",
                'image' => 'bomber_jacket_men.jpg',
                'category_id' => 6,
                'user_type_id' => 2
            ],
            [
                'name' => "bomber jackets",
                'image' => 'bomber_jacket_women.jpeg',
                'category_id' => 6,
                'user_type_id' => 3
            ],
            [
                'name' => "smart watches",
                'image' => 'smart_watch.jpeg',
                'category_id' => 7,
                'user_type_id' => 1
            ],
            [
                'name' => "strap watches",
                'image' => 'strap_watch_women.jpeg',
                'category_id' => 7,
                'user_type_id' => 3
            ],
            [
                'name' => "strap watches",
                'image' => 'strap_watch.png',
                'category_id' => 6,
                'user_type_id' => 2
            ],
            [
                'name' => "chain watches",
                'image' => 'chain_watch.png',
                'category_id' => 6,
                'user_type_id' => 2
            ],
            [
                'name' => "chain watches",
                'image' => 'chain_watch_women.jpeg',
                'category_id' => 6,
                'user_type_id' => 3
            ],

        ];

        foreach ($subCategories as $subCategory)
            SubCategory::create([
                'name' => $subCategory['name'],
                'image' => $subCategory['image'],
                'user_type_id' => $subCategory['user_type_id'],
                'category_id' => $subCategory['category_id'],
            ]);
    }
}
