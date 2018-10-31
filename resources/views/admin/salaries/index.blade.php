@extends('layouts.app')
@section('content')
    <div  style="margin:0px 20px 0px  20px;">
        <div class="row">
            @include('partials.leftnavbar')
            <div class="col-md-9">
                <div class="container">
                    <a href="" class="btn btn-primary"><small>Add Department</small></a>
                    <a href="" class="btn btn-primary"><small>Import Department (.xls)</small></a>

                </div>
                <br>
                <div class="container">
                    <div class="card">
                        <table class="table-bordered table ">
                            <thead class="table-dark">
                            <th><small style="color: #FFCD42;"> Id</small></th>
                            <th><small style="color: #FFCD42;">member_full_name</small></th>
                            <th><small style="color: #FFCD42;">Organization Name</small></th>
                            <th><small style="color: #FFCD42;">Department name</small></th>
                            <th><small style="color: #FFCD42;">Amount</small></th>
                            <th><small style="color: #FFCD42;">Created at</small></th>
                            <th><small style="color: #FFCD42;"></small></th>
                            <th><small style="color: #FFCD42;"></small></th>
                            </thead>
                            <tbody>
                            @if($salaries->count() > 0)
                                @foreach($salaries as $salary)
                                    <tr>
                                        <td><small>{{$salary->id}}</small></td>
                                        <td><small>{{$salary->member_full_name}}</small></td>
                                        <td><small>{{$salary->organization->organization_name}}</small></td>
                                        <td><small>{{$department->department_name}}</small></td>
                                        <td><small>{{$salary->amount}}</small></td>
                                        <td><small>{{$salary->created_at}}</small></td>
                                        <th><small><a href="{{$salary->id}}"><b style="color: green;">Edit</b></a></small></th>
                                        <th><small><a href="{{$salary->id}}"><b style="color: red;">Delete</b></a></small></th>
                                    </tr>
                                @endforeach
                            @else
                                <td>No salary added</td>
                            @endif

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

