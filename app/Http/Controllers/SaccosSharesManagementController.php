<?php

namespace App\Http\Controllers;

use App\SaccosShare;
use Illuminate\Http\Request;

class SaccosSharesManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shares=SaccosShare::orderBy('created_at','desc')->paginate(10);
        return view('admin.shares.index')->with([
            'share'=> $shares
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
     * @param  \App\SaccosShare  $saccosShare
     * @return \Illuminate\Http\Response
     */
    public function show(SaccosShare $saccosShare)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SaccosShare  $saccosShare
     * @return \Illuminate\Http\Response
     */
    public function edit(SaccosShare $saccosShare)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SaccosShare  $saccosShare
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SaccosShare $saccosShare)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SaccosShare  $saccosShare
     * @return \Illuminate\Http\Response
     */
    public function destroy(SaccosShare $saccosShare)
    {
        //
    }
}
