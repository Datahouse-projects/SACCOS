<?php

namespace App\Http\Controllers;

use App\SaccosSalary;
use Illuminate\Http\Request;

class SaccosSalariesManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $salaries=SaccosSalary::orderBy('created_at','desc')->paginate(10);
        return view('admin.salaries.index')->with([
            'salaries'=>$salaries
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SaccosSalary  $saccosSalary
     * @return \Illuminate\Http\Response
     */
    public function show(SaccosSalary $saccosSalary)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SaccosSalary  $saccosSalary
     * @return \Illuminate\Http\Response
     */
    public function edit(SaccosSalary $saccosSalary)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SaccosSalary  $saccosSalary
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SaccosSalary $saccosSalary)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SaccosSalary  $saccosSalary
     * @return \Illuminate\Http\Response
     */
    public function destroy(SaccosSalary $saccosSalary)
    {
        //
    }
}
