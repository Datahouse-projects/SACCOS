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
                                <th><small style="color: #FFCD42;">Member full_name</small></th>
                                <th><small style="color: #FFCD42;">Created date</small></th>
                                <th><small style="color: #FFCD42;">Duration</small></th>
                                <th><small style="color: #FFCD42;">Issued date</small></th>
                                <th><small style="color: #FFCD42;">End date</small></th>
                                <th><small style="color: #FFCD42;">Total amount</small></th>
                                <th><small style="color: #FFCD42;">Total interest</small></th>
                                <th><small style="color: #FFCD42;">Payment principal</small></th>
                                <th><small style="color: #FFCD42;">Payment interest</small></th>
                                <th><small style="color: #FFCD42;">Loan status</small></th>
                                <th><small style="color: #FFCD42;">Maximum amount</small></th>                                <th><small style="color: #FFCD42;">Created at</small></th>
                                <th><small style="color: #FFCD42;"></small></th>
                                <th><small style="color: #FFCD42;"></small></th>
                                </thead>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endif
@endsection
