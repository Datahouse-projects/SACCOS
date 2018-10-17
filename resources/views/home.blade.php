@extends('layouts.app')

@section('content')
<div  style="margin:0px 20px 0px  20px;">
    <div class="row ">
      @include('partials.leftnavbar')

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
