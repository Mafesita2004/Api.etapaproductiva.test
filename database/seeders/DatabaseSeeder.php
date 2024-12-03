<?php

namespace Database\Seeders;

use App\Models\Day;
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

        $this->call([
            // RolesSeeder::class,
            // DocumentTypeSeeder::class,
            // RegionalSeeder::class,
            // TrainingCenterSeeder::class,
            Departmentseeder::class,
            MunicipalitySeeder::class,
            // DaySeeder::class,
        ]);
        // $this->call(Departmentseeder::class);
        // $this->call(MunicipalitySeeder::class);
    }
}
