<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;


class RolesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $role = Role::firstOrNew(['name' => 'admin']);
        if (!$role->exists) {
            $role->fill([
                'display_name' =>'Administration',
            ])->save();
        }

        $role = Role::firstOrNew(['name' => 'user']);
        if (!$role->exists) {
            $role->fill([
                'display_name' =>'User',
            ])->save();
        }
        $role = Role::firstOrNew(['name' => 'agent']);
        if (!$role->exists) {
            $role->fill([
                'display_name' =>'Agent',
            ])->save();
        }
    }
}
