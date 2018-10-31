@extends('layouts.app')

@section('content')
    <div  style="margin:0px 20px 0px  20px;">
        <div class="row">
            @include('partials.leftnavbar')
            <div class="col-md-9">
                @include('user.loan.partial.topnavbar')
                <br>
                <div class="container">
                    <div class="card">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif
                        <div class="card-header" style="background:#8B8B8B; color: black; "><h5 style="text-align: center;">{{ __('Apply Loan') }}</h5></div>
                            <br>

                            <form method="post" action="{{ route('user.loan.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <label for="member_full_name" class="col-sm-4 col-form-label text-md-right">{{ __('Member full Name') }}</label>
                                    <div class="col-md-6">
                                        <input id="member_full_name" type="text" class="form-control{{ $errors->has('member_full_name') ? ' is-invalid' : '' }}" name="member_full_name" value="{{ old('member_full_name') }}" required autofocus>

                                        @if ($errors->has('member_full_name'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('member_full_name') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="created_date" class="col-sm-4 col-form-label text-md-right">{{ __('Loan created date') }}</label>
                                    <div class="col-md-6">
                                        <input id="created_date" type="date" class="form-control{{ $errors->has('created_date') ? ' is-invalid' : '' }}" name="created_date" value="{{ old('created_date') }}" required autofocus>

                                        @if ($errors->has('created_date'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('created_date') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="duration" class="col-sm-4 col-form-label text-md-right">{{ __('Duration') }}</label>
                                    <div class="col-md-6">
                                        <input id="duration" type="time" class="form-control{{ $errors->has('duration') ? ' is-invalid' : '' }}" name="duration" value="{{ old('duration') }}" required autofocus>

                                        @if ($errors->has('duration'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('duration') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="issued_date" class="col-sm-4 col-form-label text-md-right">{{ __('Issued date') }}</label>
                                    <div class="col-md-6">
                                        <input id="issued_date" type="date" class="form-control{{ $errors->has('issued_date') ? ' is-invalid' : '' }}" name="issued_date" value="{{ old('issued_date') }}" required autofocus>

                                        @if ($errors->has('issued_date'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('issued_date') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="end_date" class="col-sm-4 col-form-label text-md-right">{{ __('loan end date') }}</label>
                                    <div class="col-md-6">
                                        <input id="end_date" type="date" class="form-control{{ $errors->has('end_date') ? ' is-invalid' : '' }}" name="end_date" value="{{ old('end_date') }}" required autofocus>

                                        @if ($errors->has('end_date'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('end_date') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="total_amount" class="col-sm-4 col-form-label text-md-right">{{ __('Total amount') }}</label>
                                    <div class="col-md-6">
                                        <input id="total_amount" type="number" class="form-control{{ $errors->has('total_amount') ? ' is-invalid' : '' }}" name="total_amount" value="{{ old('total_amount') }}" required autofocus>

                                        @if ($errors->has('total_amount'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('total_amount') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="total_interest" class="col-sm-4 col-form-label text-md-right">{{('total_interest') }}</label>
                                    <div class="col-md-6">
                                        <input id="total_interest" type="number" class="form-control{{ $errors->has('total_interest') ? ' is-invalid' : '' }}" name="total_interest" value="{{ old('total_interest') }}" required autofocus>

                                        @if ($errors->has('total_interest'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('total_interest') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="payment_principal" class="col-sm-4 col-form-label text-md-right">{{ ('Payment principal') }}</label>
                                    <div class="col-md-6">
                                        <input id="payment_principal" type="text" class="form-control{{ $errors->has('payment_principal') ? ' is-invalid' : '' }}" name="payment_principal" value="{{ old('payment_principal') }}" required autofocus>

                                        @if ($errors->has('payment_principal'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('payment_principal') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="payment_interest" class="col-sm-4 col-form-label text-md-right">{{ ('Payment interest') }}</label>
                                    <div class="col-md-6">
                                        <input id="payment_interest" type="number" class="form-control{{ $errors->has('payment_interest') ? ' is-invalid' : '' }}" name="payment_interest" value="{{ old('payment_interest') }}" required autofocus>

                                        @if ($errors->has('payment_interest'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('payment_interest') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="payment_interest" class="col-sm-4 col-form-label text-md-right">{{ ('Payment interest') }}</label>
                                    <div class="col-md-6">
                                        <input id="payment_interest" type="number" class="form-control{{ $errors->has('payment_interest') ? ' is-invalid' : '' }}" name="payment_interest" value="{{ old('payment_interest') }}" required autofocus>

                                        @if ($errors->has('payment_interest'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('payment_interest') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">

                                    <label for="loan_status" class="col-sm-4 col-form-label text-md-right">{{ ('loan_status') }}</label>
                                    <div class="col-md-6">
                                        <input id="loan_status" type="number" class="form-control{{ $errors->has('loan_status') ? ' is-invalid' : '' }}" name="loan_status" value="{{ old('loan_status') }}" required autofocus>

                                        @if ($errors->has('loan_status'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('loan_status') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>


                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary btn-block">
                                            {{ _('Apply') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        <div class="card-body">

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
