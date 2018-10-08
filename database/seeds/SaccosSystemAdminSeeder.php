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
          'name'=>'Jafary',
            'email'=>'hjafery@yahoo.com',
            'password'=>bcrypt('password'),
            'is_active'=>true,
            'role_id'=>1,
        ];
        User::create($admin);
    }
}
