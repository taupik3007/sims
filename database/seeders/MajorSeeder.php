<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Major;

class MajorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $major= Major::create([
            'major_name' => 'TKJ',
            

        ]);
        $major= Major::create([
            'major_name' => 'RPL',
            

        ]);
        $major= Major::create([
            'major_name' => 'MM',
            

        ]);
    }
}
