<?php

namespace App\Http\Controllers;

use App\SaccosDepartment;
use App\SaccosOrganization;
use App\SaccosUserRole;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $organizations_count = SaccosOrganization::all()->count();
        $departments_count = SaccosDepartment::all()->count();
        $users_count = User::all()->count();
        $roles_count = SaccosUserRole::all()->count();

//        dd($organizations);
        return view('home')->with([
            'organization_count'=>$organizations_count,
            'departments_count'=>$departments_count,
            'users_count'=>$users_count,
            'roles_count'=>$roles_count
        ]);
    }
}
