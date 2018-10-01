<?php

use App\SaccosDepartment;
use Illuminate\Database\Seeder;

class SaccosDepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dept1 = [
            'departiment_name'=>'Finance Department',
            'organization_id'=>1,
        ];
        $dept2 = [
            'departiment_name'=>'Academic Department',
            'organization_id'=>1,
        ];
        $dept3 = [
            'departiment_name'=>'Finance Department',
            'organization_id'=>2,
        ];
        $dept4 = [
            'departiment_name'=>'Academic Department',
            'organization_id'=>2,
        ];
        SaccosDepartment::create($dept1);
        SaccosDepartment::create($dept2);
        SaccosDepartment::create($dept3);
        SaccosDepartment::create($dept4);
    }
}
