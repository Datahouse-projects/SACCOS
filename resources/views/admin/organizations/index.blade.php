@extends('layouts.app')
@section('content')
    <div class="container">
        <a href="{{route('saccos.create.organizations')}}" class="btn btn-primary"><small>Add Organization</small></a>
        <a href="" class="btn btn-primary"><small>Import Organizations (.xls)</small></a>
        <a href="" class="btn btn-primary"><small>Export Organizations (.xls)</small></a>
        <a href="" class="btn btn-primary"><small>Print Organizations List (pdf)</small></a>
    </div>
    <br>
    <div class="container">
        <div class="card">
            <table class="table-bordered table table-responsive">
                <thead class="table-dark">
                <th><small style="color: #FFCD42;"> Id</small></th>
                <th><small style="color: #FFCD42;">Logo</small></th>
                <th><small style="color: #FFCD42;">Oraganization Name</small></th>
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
@endsection
