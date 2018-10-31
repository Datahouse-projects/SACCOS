<?php

use App\User;
use Illuminate\Database\Seeder;

class SaccosSystemAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = [
          'name'=>'Admin',
            'email'=>'admin@admin.com',
            'password'=>bcrypt('123456789'),
            'is_active'=>true,
            'role_id'=>1,
        ];
        User::create($admin);
    }
}
