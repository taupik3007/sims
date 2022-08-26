<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Clas;

class ClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $major= Clas::create([
            'major_id' => '1',
            'class_name' => 'X',
            'class_number' => '1'

        ]);
        $major= Clas::create([
            'major_id' => '2',
            'class_name' => 'X',
            'class_number' => '1'

        ]);
    }
}
