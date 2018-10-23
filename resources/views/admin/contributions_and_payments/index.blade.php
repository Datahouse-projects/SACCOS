@extends('layouts.app')
@section('content')
    <div  style="margin:0px 20px 0px  20px;">
        <div class="row">
            @include('partials.leftnavbar')
            <div class="col-md-9">
                @include('admin.contribution_and_payments.partial.topnavbar')
                <br>
                <div class="container">
                    <div class="card">
                        <table class="table-bordered table table-responsive">
                            <thead class="table-dark">
                            <th><small style="color: #FFCD42;"> Id</small></th>
                            <th><small style="color: #FFCD42;">Logo</small></th>
                            <th><small style="color: #FFCD42;">Organization Name</small></th>
                            <th><small style="color: #FFCD42;">Location</small></th>
                            <th><small style="color: #FFCD42;">Functionality</small></th>
                            <th><small style="color: #FFCD42;">Created at</small></th>
                            <th><small style="color: #FFCD42;"></small></th>
                            <th><small style="color: #FFCD42;"></small></th>
                            </thead>
                            <tbody>
                            @if($organizations->count() > 0)
                                @foreach($organizations as $organization)
                                    <tr>
                                        <td><small>{{$organization->id}}</small></td>
                                        <td><small><img src="{{asset($organization->logo)}}" width="50" height="50" style="border-radius: 50%;" alt=""></small></td>
                                        <td><small>{{$organization->organization_name}}</small></td>
                                        <td><small>{{$organization->location}}</small></td>
                                        <td><small>{{$organization->functionality}}</small></td>
                                        <td><small>{{$organization->created_at}}</small></td>
                                        <th><small><a href="{{$organization->id}}"><b style="color: green;">Edit</b></a></small></th>
                                        <th><small><a href="{{$organization->id}}"><b style="color: red;">Delete</b></a></small></th>
                                    </tr>
                                @endforeach
                            @else
                                <td>No Organizations</td>
                            @endif

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
