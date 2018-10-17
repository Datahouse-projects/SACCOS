<?php

namespace App\Http\Controllers;

use App\SaccosMember;
use App\User;
use Illuminate\Http\Request;

class SaccosMemberManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = Saccosmember::orderBy('created_at','desc')->paginate(10);
        return view('admin.members.index')->with([
            'members'=>$members,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::where('role_id',4)->orderBy('created_at','desc')->get();
        return view('admin.members.create')->with([
                'users'=>$users
            ]);
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
            'member_full_name'=>'required',
            'town'=>'required',
            'residence'=>'required',
            'occupation'=>'required',
            'email'=>'required',
            'country'=>'required',
            'nationality'=>'required',
            'mobile_number'=>'required',
            'date_of_registration'=>'required',
            'passport_image'=>'required|image'
        ]);
        $passport_image = $request->passport_image;
        $passport_image_new_name = time().$passport_image->getClientOriginalName();
        $passport_image->move('uploads/member/images/',$passport_image_new_name);
        $member = new SaccosMember;
        $member->member_full_name = $request->member_full_name;
        $member->town = $request->town;
        $member->residence = $request->residence;
        $member->occupation = $request->occupation;
        $member->email = $request->email;
        $member->country = $request->country;
        $member->nationality = $request->nationality;
        $member->mobile_number = $request->mobile_number;
        $member->date_of_registration = $request->date_of_registration;
        $member->passport_image = 'uploads/member/images/'.$passport_image_new_name;
        $member->save();
        return redirect()->back()->with('success','member added successful');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SaccosMember  $saccosMember
     * @return \Illuminate\Http\Response
     */
    public function show(SaccosMember $saccosMember)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SaccosMember  $saccosMember
     * @return \Illuminate\Http\Response
     */
    public function edit(SaccosMember $saccosMember)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SaccosMember  $saccosMember
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SaccosMember $saccosMember)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SaccosMember  $saccosMember
     * @return \Illuminate\Http\Response
     */
    public function destroy(SaccosMember $saccosMember)
    {
        //
    }
}
