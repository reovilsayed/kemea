<?php

namespace Database\Seeders;

use App\Models\Plan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Plan::create([
            'name' => 'Basic Plan',
            'price' => 29.99,
            'type' => 'monthly',
            'permissions' => json_encode([
                'is_message'=>true,
                'is_staging'=>true,
                'is_team_management'=>true,
                'is_boosted'=>true,
            ]),
        ]);

        Plan::create([
            'name' => 'PROFESSIONAL PACK',
            'price' => 79.99,
            'type' => 'yearly',
            'permissions' => json_encode([
                'is_message'=>true,
                'is_staging'=>true,
                'is_team_management'=>true,
                'is_boosted'=>true,
            ]),
        ]);
        Plan::create([
            'name' => 'Ultimate Plan',
            'price' => 149.99,
            'type' => 'lifetime',
            'permissions' => json_encode([
                'is_message'=>true,
                'is_staging'=>true,
                'is_team_management'=>true,
                'is_boosted'=>true,
            ]),
        ]);
    }
}
