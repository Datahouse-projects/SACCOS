<?php

use App\SaccosUserRole;
use Illuminate\Database\Seeder;

class SaccosUserRolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = [
            'role'=>'Admin'
        ];
        $role2 = [
            'role'=>'Chief Executive Officer of the Organization (CEO)'
        ];
        $role3 = [
            'role'=>'Head Of the Department'
        ];
        $role4= [
            'role'=>'Member of the Department'
        ];
        $role5= [
            'role'=>'Normal User'
        ];
        SaccosUserRole::create($role1);
        SaccosUserRole::create($role2);
        SaccosUserRole::create($role3);
        SaccosUserRole::create($role4);
        SaccosUserRole::create($role5);
    }
}
