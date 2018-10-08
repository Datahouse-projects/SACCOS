<?php

use App\SaccosOrganization;
use Illuminate\Database\Seeder;

class SaccosOrganizationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $org1 = [
            'organization_name'=>'Dar es Salaam Institute of Technology (DIT)',
            'location'=>'Dar es salaam',
            'functionality'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, animi aspernatur consequatur dolor dolorem facere itaque nostrum recusandae tenetur veniam.',
            'logo'=>'img/images.png'
        ];
        $org2 = [
            'organization_name'=>'College of Business and Education (CBE)',
            'location'=>'Dar es salaam',
            'functionality'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, animi aspernatur consequatur dolor dolorem facere itaque nostrum recusandae tenetur veniam.',
            'logo'=>'img/image2.png'
        ];
        SaccosOrganization::create($org1);
        SaccosOrganization::create($org2);

    }
}
