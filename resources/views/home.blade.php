@extends('layouts.app')

@section('content')
<div  style="margin:0px 20px 0px  20px;">
    <div class="row ">
      @include('partials.leftnavbar')

        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Dashboard</div>
                @if(Auth::user()->role_id == 1 or Auth::user()->role_id == 2 or Auth::user()->role_id == 3 or Auth::user()->role_id == 4)
                <div class="card-body" style="background: #A999DF;">
                    {{--@if (session('status'))--}}
                        {{--<div class="alert alert-success" role="alert">--}}
                            {{--{{ session('status') }}--}}
                        {{--</div>--}}
                    {{--@endif--}}
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card">
                                <small style="padding-left: 10px;">Organizations</small>
                                <h2 style="text-align: center;">{{$organization_count}}</h2>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <small style="padding-left: 10px;">Departments</small>
                                <h2 style="text-align: center;">{{$departments_count}}</h2>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <small style="padding-left: 10px;">All System Users</small>
                                <h2 style="text-align: center;">{{$users_count}}</h2>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <small style="padding-left: 10px;">Saccos User Roles</small>
                                <h2 style="text-align: center;">{{$roles_count}}</h2>
                            </div>
                        </div>

                    </div>

                </div>
                @else
                    <div class="card-body" style="background: #A999DF;">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="card">
                                    <small style="padding-left: 10px;">Current Year Contribution (2017/2018)(Tsh)</small>
                                    <h2 style="text-align: center;"> 1,200,000/=</h2>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <small style="padding-left: 10px; text-align: center;">No. of Loans Applied</small>
                                    <br>
                                    <h2 style="text-align: center;">10</h2>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <small style="padding-left: 10px; text-align: center;">Current Loan Status <span style="color: darkred;">(Active)</span></small>
                                    <br>
                                    <h2 style="text-align: center;">Tsh. 100,000</h2>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <small style="padding-left: 10px; text-align: center;">Time Remained To Pay</small>
                                    <br>
                                    <h2 style="text-align: center;">365 Days</h2>
                                </div>
                            </div>

                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
