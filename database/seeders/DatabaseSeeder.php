<?php

namespace Database\Seeders;

use App\Models\Area;
use App\Models\Review;
use App\Models\ReviewQuality;
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

        User::factory()->create([
            'id' => 2,
            'name' => 'Bleksa',
            'email' => 'bleksa.mejl@gmail.com',
            'password' => bcrypt('Kobredabre1'),
        ]);

        Area::factory()->create([
            'id' => 1,
            'name' => 'Matematika',
            'hidden' => false
        ]);
        Area::factory()->create([
            'id' => 2,
            'name' => 'Fizika',
            'hidden' => true
        ]);
        Area::factory()->create([
            'id' => 3,
            'name' => 'Hemija',
            'hidden' => false
        ]);

        Subarea::factory()->create([
            'id' => 1, 
            'name' => 'Geometrija', 
            'area_id' => 1, 
            'hidden' => false
        ]);

        Subarea::factory()->create([
            'id' => 2, 
            'name' => 'Algebra', 
            'area_id' => 1, 
            'hidden' => false
        ]);

        ScientificWork::factory(25)->create();
        Review::factory(40)->create();
        ReviewQuality::factory(60)->create();
    }
}
