<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    public function run()
    {
        Role::insert([
            [
                'id' => '0865fe87-fd05-11ef-ba53-5811223a0998',
                'name' => 'admin'
            ],
            [
                'id' => '0866108f-fd05-11ef-ba53-5811223a0998',
                'name' => 'user'
            ],
        ]);
    }
}
