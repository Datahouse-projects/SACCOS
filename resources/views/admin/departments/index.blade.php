@extends('layouts.app')
@section('content')
   <div  style="margin:0px 20px 0px  20px;">
       <div class="row">
           @include('partials.leftnavbar')
           <div class="col-md-9">
               <div class="container">
                   <a href="" class="btn btn-primary"><small>Add Department</small></a>
                   <a href="" class="btn btn-primary"><small>Import Department (.xls)</small></a>
                   <a href="" class="btn btn-primary"><small>Export Department (.xls)</small></a>
                   <a href="" class="btn btn-primary"><small>Print Department List (pdf)</small></a>
               </div>
               <br>
               <div class="container">
                   <div class="card">
                       <table class="table-bordered table ">
                           <thead class="table-dark">
                           <th><small style="color: #FFCD42;"> Id</small></th>
                           <th><small style="color: #FFCD42;">Department Name</small></th>
                           <th><small style="color: #FFCD42;">Organization </small></th>
                           <th><small style="color: #FFCD42;">Created at</small></th>
                           <th><small style="color: #FFCD42;"></small></th>
                           <th><small style="color: #FFCD42;"></small></th>
                           </thead>
                           <tbody>
                           @if($departments->count() > 0)
                               @foreach($departments as $department)
                                   <tr>
                                       <td><small>{{$department->id}}</small></td>
                                       <td><small>{{$department->department_name}}</small></td>
                                       <td><small>{{$department->organization_id}}</small></td>
                                       <td><small>{{$department->created_at}}</small></td>
                                       <th><small><a href="{{$department->id}}"><b style="color: green;">Edit</b></a></small></th>
                                       <th><small><a href="{{$department->id}}"><b style="color: red;">Delete</b></a></small></th>
                                   </tr>
                               @endforeach
                           @else
                               <td>No Departments</td>
                           @endif

                           </tbody>
                       </table>
                   </div>
               </div>
           </div>
       </div>
   </div>
@endsection
