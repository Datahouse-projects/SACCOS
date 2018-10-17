@extends('layouts.app')
@section('content')
    <div  style="margin:0px 20px 0px  20px;">
        <div class="row">
            @include('partials.leftnavbar')
            <div class="col-md-9">
                @include('admin.loans.partial.topnavbar')
                <br>
                <div class="container">
                    <div class="card">
                        <table class="table-bordered table table-responsive">
                            <thead class="table-dark">
                            <th><small style="color: #FFCD42;"> id</small></th>
                            <th><small style="color: #FFCD42;">Member Full name</small></th>
                            <th><small style="color: #FFCD42;">Town</small></th>
                            <th><small style="color: #FFCD42;">Residence at</small></th>
                            <th><small style="color: #FFCD42;">Email </small></th>
                            <th><small style="color: #FFCD42;">Country </small></th>
                            <th><small style="color: #FFCD42;">Nationality</small></th>
                            <th><small style="color: #FFCD42;">Mobile number</small></th>
                            <th><small style="color: #FFCD42;">Date of registration</small></th>
                            <th><small style="color: #FFCD42;">Passport Image</small></th>
                            <th><small style="color: #FFCD42;">Department  id</small></th>
                            <th><small style="color: #FFCD42;">Passport Image</small></th>
                            <th><small style="color: #FFCD42;"></small></th>
                            <th><small style="color: #FFCD42;"></small></th>
                            </thead>
                            <tbody>
                            @if($loans->count() > 0)
                                @foreach($members as $member)
                                    <tr>
                                        <td><small>{{$loans->id}}</small></td>
                                        <td><small>{{$loans->member_full_name}}</small></td>
                                        <td><small>{{$loans->town}}</small></td>
                                        <td><small>{{$loans->residence}}</small></td>
                                        <td><small>{{$loans->occupation}}</small></td>
                                        <td><small>{{$loans->email}}</small></td>
                                        <td><small>{{$loans->country}}</small></td>
                                        <td><small>{{$loans->nationality}}</small></td>
                                        <td><small>{{$loans->mobile_number}}</small></td>
                                        <td><small>{{$loans->date_of_registration}}</small></td>
                                        <td><small><img src="{{asset($loans->passport_image)}}" width="50" height="50" style="border-radius: 50%;" alt=""></small></td>
                                        <td><small>{{$loans->department_id}}</small></td>
                                        <td><small>{{$loans->created_at}}</small></td>
                                        <th><small><a href="{{$loans->id}}"><b style="color: green;">Edit</b></a></small></th>
                                        <th><small><a href="{{$loans->id}}"><b style="color: red;">Delete</b></a></small></th>
                                    </tr>
                                @endforeach
                            @else
                                <td>No Member</td>
                            @endif

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
