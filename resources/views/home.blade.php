@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">System Menu</div>
                <div>
                    <ul style="list-style: none; margin-left: -20px;">
                        <li><a href="{{route('saccos.organizations.management')}}" style="text-decoration: none; color: grey;"><small><b>-</b> Saccos Oranizations</small></a></li>
                        <li><a href="{{route('saccos.organizations.departments')}}" style="text-decoration: none; color: grey;"><small><b>-</b> Saccos Organization Departments</small></a></li>
                        <li><a href="#" style="text-decoration: none; color: grey;"><small><b>-</b> Saccos Loans Management</small></a></li>
                        <li><a href="#" style="text-decoration: none; color: grey;"><small><b>-</b> Saccos Members Management</small></a></li>
                        <li><a href="#" style="text-decoration: none; color: grey;"><small><b>-</b> Saccos Contributions and  Payments</small></a></li>
                        <li><a href="#" style="text-decoration: none; color: grey;"><small><b>-</b> Saccos Salaries Management</small></a></li>
                        <li><a href="#" style="text-decoration: none; color: grey;"><small><b>-</b> Saccos Shares Management</small></a></li>
                        <li><a href="#" style="text-decoration: none; color: grey;"><small><b>-</b> System Users Accounts Management</small></a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Dashboard</div>

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
            </div>
        </div>
    </div>
</div>
@endsection
