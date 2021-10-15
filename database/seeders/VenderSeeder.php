<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Vender;

class VenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $venders = [
            'roadster' => 'roadster.png',
            'nike' => 'nike.png',
            'lakmé' => 'lakmé.png',
            'clovia' => 'clovia.png'
        ];

        foreach ($venders as $name => $img)
            Vender::create(compact('name', 'img'));
    }
}
