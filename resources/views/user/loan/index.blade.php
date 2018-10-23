@extends('layouts.app')
@section('content')
    @if(Auth::user()->role_id == 1 or Auth::user()->role_id == 2 or Auth::user()->role_id == 3 or Auth::user()->role_id == 4)

    @else

        <div  style="margin:0px 20px 0px  20px;">
            <div class="row">
                @include('partials.leftnavbar')
                <div class="col-md-9">
                    @include('user.loan.partial.topnavbar')
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
                                <tr>
                                    <td>Loan History</td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endif
@endsection
