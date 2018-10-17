<?php

use App\User;
use Illuminate\Database\Seeder;

class SaccosSystemUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i<=20; $i++){
            User::create([
                'name'=>'user '.+$i,
                'email'=>'user'.$i.'@gmail.com',
                'password'=>bcrypt('password'),
                'is_active'=>false,
                'role_id'=>4,
            ]);
        }

    }
}
