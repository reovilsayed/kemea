<?php

namespace Database\Seeders;

use App\Models\BoostPrice;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BoostPriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role = BoostPrice::firstOrNew(['days' => 3]);
        if (!$role->exists) {
            $role->fill([
                'price' =>10,
                'name' =>'Top Ad',
                'status' =>1,
            ])->save();
        }
        $role = BoostPrice::firstOrNew(['days' => 5]);
        if (!$role->exists) {
            $role->fill([
                'price' =>20,
                'name' =>'Prefered Ad',
                'status' =>1,
            ])->save();
        }
        $role = BoostPrice::firstOrNew(['days' => 7]);
        if (!$role->exists) {
            $role->fill([
                'price' =>30,
                'name' =>'Large Visibility',
                'status' =>1,
            ])->save();
        }
        if (!$role->exists) {
            $role->fill([
                'price' =>30,
                'name' =>'Video First Add',
                'status' =>1,
            ])->save();
        }

  
    }
}
