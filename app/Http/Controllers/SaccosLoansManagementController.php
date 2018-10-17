<?php

namespace App\Http\Controllers;

use App\SaccosLoan;
use Illuminate\Http\Request;

class SaccosLoansManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $loans = SaccosLoan::orderBy('created_at','desc')->paginate(10);
        return view('admin.loans.index')->with([
            'loans'=>$loans,
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
     * @param  \App\SaccosLoan  $saccosLoan
     * @return \Illuminate\Http\Response
     */
    public function show(SaccosLoan $saccosLoan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SaccosLoan  $saccosLoan
     * @return \Illuminate\Http\Response
     */
    public function edit(SaccosLoan $saccosLoan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SaccosLoan  $saccosLoan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SaccosLoan $saccosLoan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SaccosLoan  $saccosLoan
     * @return \Illuminate\Http\Response
     */
    public function destroy(SaccosLoan $saccosLoan)
    {
        //
    }
}
