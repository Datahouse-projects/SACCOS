@extends('layouts.app')
@section('content')
    <div  style="margin:0px 20px 0px  20px;">
        <div class="row">
            @include('partials.leftnavbar')
            <div class="col-md-9">
                @include('admin.members.partial.topnavbar')
                <br>
                <div class="container">
                    <div class="card">
                        <table class="table-bordered table table-responsive">
                            <thead class="table-dark">
                            <th><small style="color: #FFCD42; font-size: 10px;">Id</small></th>
                            <th><small style="color: #FFCD42; font-size: 10px;">F_name</small></th>
                            <th><small style="color: #FFCD42; font-size: 10px;">Town</small></th>
                            <th><small style="color: #FFCD42; font-size: 10px;">Residence_at</small></th>
                            <th><small style="color: #FFCD42; font-size: 10px;">Email</small></th>
                            <th><small style="color: #FFCD42; font-size: 10px;">Country </small></th>
                            <th><small style="color: #FFCD42; font-size: 10px;">Nationality</small></th>
                            <th><small style="color: #FFCD42; font-size: 10px;">Contact</small></th>
                            <th><small style="color: #FFCD42; font-size: 10px;">registered_at</small></th>
                            <th><small style="color: #FFCD42; font-size: 10px;">Passport</small></th>
                            <th><small style="color: #FFCD42; font-size: 10px;">Department</small></th>
                            <th><small style="color: #FFCD42;font-size: 10px">created_at</small></th>

                            </thead>
                            <tbody>
                            @if($members->count() > 0)
                                @foreach($members as $member)
                                    <tr>
                                        <td><small style="font-size: 10px;">{{$member->id}}</small></td>
                                        <td><small style="font-size: 10px;">{{$member->member_full_name}}</small></td>
                                        <td><small style="font-size: 10px;">{{$member->town}}</small></td>
                                        <td><small style="font-size: 10px;">{{$member->residence}}</small></td>
                                        <td><small style="font-size: 10px;">{{$member->email}}</small></td>
                                        <td><small style="font-size: 10px;">{{$member->country}}</small></td>
                                        <td><small style="font-size: 10px;">{{$member->nationality}}</small></td>
                                        <td><small style="font-size: 10px;">{{$member->mobile_number}}</small></td>
                                        <td><small style="font-size: 10px;">{{$member->date_of_registration}}</small></td>
                                        <td><small style="font-size: 10px;"><img src="{{asset($member->passport_image)}}" width="50" height="50" style="border-radius: 50%;" alt=""></small></td>
                                        <td><small style="font-size: 10px;">{{$member->department->department_name}}</small></td>
                                        <td><small style="font-size: 10px;">{{$member->created_at}}</small></td>
                                        <th><small style="font-size: 10px;"><a href="{{$member->id}}"><b style="color: green;">Edit</b></a></small></th>
                                        <th><small style="font-size: 10px;"><a href="{{$member->id}}"><b style="color: red;">Delete</b></a></small></th>
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
