<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(SaccosOrganizationsTableSeeder::class);
         $this->call(SaccosDepartmentsTableSeeder::class);
         $this->call(SaccosUserRolesTableSeeder::class);
         $this->call(SaccosSystemAdminSeeder::class);
         $this->call(SaccosSystemUsersTableSeeder::class);
    }
}
