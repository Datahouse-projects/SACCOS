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
                            <th><small style="color: #FFCD42;font-size: 10px;"> id</small></th>
                            <th><small style="color: #FFCD42;font-size: 10px;">F_name</small></th>
                            <th><small style="color: #FFCD42;font-size: 10px;">Memb_id</small></th>
                            <th><small style="color: #FFCD42;font-size: 10px;">Organ_id</small></th>
                            <th><small style="color: #FFCD42;font-size: 10px;">LoansCategory id</small></th>
                            <th><small style="color: #FFCD42;font-size: 10px;">Created date</small></th>
                            <th><small style="color: #FFCD42;font-size: 10px;">Duration</small></th>
                            <th><small style="color: #FFCD42;font-size: 10px;">Issued date</small></th>
                            <th><small style="color: #FFCD42;font-size: 10px;">End date</small></th>
                            <th><small style="color: #FFCD42;font-size: 10px;">Interest per day</small></th>
                            <th><small style="color: #FFCD42;font-size: 10px;">Total interest</small></th>
                            <th><small style="color: #FFCD42;font-size: 10px;">Total amount</small></th>
                            <th><small style="color: #FFCD42;font-size: 10px;">Payment principal</small></th>
                            <th><small style="color: #FFCD42;font-size: 10px;">Payment interest</small></th>
                            <th><small style="color: #FFCD42;font-size: 10px;">Loan status</small></th>
                            <th><small style="color: #FFCD42;font-size: 10px;">Muximum amount</small></th>
                            <th><small style="color: #FFCD42;"></small></th>
                            <th><small style="color: #FFCD42;"></small></th>
                            </thead>
                            <tbody>
                            @if($loans->count() > 0)
                                @foreach($members as $member)
                                    <tr>
                                        <td><small>{{$loans->id}}</small></td>
                                        <td><small>{{$loans->member_full_name}}</small></td>
                                        <td><small>{{$loans->member_id}}</small></td>
                                        <td><small>{{$loans->organization_id}}</small></td>
                                        <td><small>{{$loans->loans_category_id}}</small></td>
                                        <td><small>{{$loans->created_date}}</small></td>
                                        <td><small>{{$loans->duration}}</small></td>
                                        <td><small>{{$loans->issued_date}}</small></td>
                                        <td><small>{{$loans->end_date}}</small></td>
                                        <td><small>{{$loans->interest_per_day}}</small></td>
                                        <td><small>{{$loans->total_interest}}</small></td>
                                        <td><small>{{$loans->total_amount}}</small></td>
                                        <td><small>{{$loans->payment_principal}}</small></td>
                                        <td><small>{{$loans->payment_interest}}</small></td>
                                        <td><small>{{$loans->loan_status}}</small></td>
                                        <td><small>{{$loans->muximum_amount}}</small></td>
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
