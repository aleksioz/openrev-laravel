<?php

namespace Database\Seeders;

use App\Models\Area;
use App\Models\ScientificWork;
use App\Models\Subarea;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'id' => 1,
            'name' => 'Aleksa',
            'email' => 'aleksa.mejl@gmail.com',
            'password' => bcrypt('Kobredabre1'),
        ]);

        Area::factory()->create([
            'id' => 1,
            'name' => 'Matematika',
            'hidden' => false
        ]);

        Subarea::factory()->create([
            'id' => 1, 
            'name' => 'Geometrija', 
            'area_id' => 1, 
            'hidden' => false
        ]);

        ScientificWork::factory(100)->create();
    }
}
