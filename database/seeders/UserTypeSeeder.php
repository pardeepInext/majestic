<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UserType;
class UserTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            'unisex' => 'unisex.jpeg',
            'men' => 'him.png',
            'women' => 'her.png',
        ];
  
        foreach($types as $name=>$img)
          UserType::create(compact('name','img'));
    }
}
