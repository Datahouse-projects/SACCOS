<?php

namespace App\Http\Controllers;

use App\SaccosOrganization;
use Illuminate\Http\Request;

class SaccosManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $organizations = SaccosOrganization::orderBy('created_at','desc')->paginate(10);
        return view('admin.organizations.index')->with([
            'organizations'=>$organizations,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.organizations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'organization_name'=>'required',
            'location'=>'required',
            'functionality'=>'required',
            'logo'=>'required|image'
        ]);
        $logo = $request->logo;
        $logo_new_name = time().$logo->getClientOriginalName();
        $logo->move('uploads/organization/images/',$logo_new_name);

        $oraganization = new SaccosOrganization;
        $oraganization->organization_name = $request->organization_name;
        $oraganization->location = $request->location;
        $oraganization->functionality = $request->functionality;
        $oraganization->logo = 'uploads/organization/images/'.$logo_new_name;
        $oraganization->save();
        return redirect()->back()->with('success','Organization added successful');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
