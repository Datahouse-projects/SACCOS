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
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif
                        <div class="card-header" style="background:#8B8B8B; color: black; "><h5 style="text-align: center;">{{ __('Apply Member') }}</h5></div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('user.loan.store') }}" enctype="multipart/form-data">
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
                                    <label for="created_date" class="col-sm-4 col-form-label text-md-right">{{ __('Created date') }}</label>
                                    <div class="col-md-6">
                                        <input id="created_date" type="text" class="form-control{{ $errors->has('created_date') ? ' is-invalid' : '' }}" name="created_date" value="{{ old('created_date') }}" required autofocus>

                                        @if ($errors->has('created_date'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('created_date') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="duration" class="col-sm-4 col-form-label text-md-right">{{ __('duration') }}</label>
                                    <div class="col-md-6">
                                        <input id="duration" type="text" class="form-control{{ $errors->has('residence') ? ' is-invalid' : '' }}" name="duration" value="{{ old('duration') }}" required autofocus>

                                        @if ($errors->has('duration'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('duration') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="occupation" class="col-sm-4 col-form-label text-md-right">{{ __('Occupation') }}</label>
                                    <div class="col-md-6">
                                        <input id="occupation" type="text" class="form-control{{ $errors->has('occupation') ? ' is-invalid' : '' }}" name="occupation" value="{{ old('occupation') }}" required autofocus>

                                        @if ($errors->has('occupation'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('occupation') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('Email') }}</label>
                                    <div class="col-md-6">
                                        <input id="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="country" class="col-sm-4 col-form-label text-md-right">{{('country') }}</label>
                                    <div class="col-md-6">
                                        <input id="country" type="text" class="form-control{{ $errors->has('country') ? ' is-invalid' : '' }}" name="country" value="{{ old('country') }}" required autofocus>

                                        @if ($errors->has('country'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('country') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nationality" class="col-sm-4 col-form-label text-md-right">{{ ('Nationality') }}</label>
                                    <div class="col-md-6">
                                        <input id="nationality" type="text" class="form-control{{ $errors->has('nationality') ? ' is-invalid' : '' }}" name="nationality" value="{{ old('nationality') }}" required autofocus>

                                        @if ($errors->has('nationality'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nationality') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="mobile_number" class="col-sm-4 col-form-label text-md-right">{{ ('Mobile number') }}</label>
                                    <div class="col-md-6">
                                        <input id="mobile_number" type="number" class="form-control{{ $errors->has('mobile_number') ? ' is-invalid' : '' }}" name="mobile_number" value="{{ old('mobile_number') }}" required autofocus>

                                        @if ($errors->has('mobile_number'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('mobile_number') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="date_of_registration" class="col-sm-4 col-form-label text-md-right">{{ __('Date of registration') }}</label>
                                    <div class="col-md-6">
                                        <input id="date_of_registration" type="date" class="form-control{{ $errors->has('date_of_registration') ? ' is-invalid' : '' }}" name="date_of_registration" value="{{ old('date_of_registration') }}" required autofocus>

                                        @if ($errors->has('date_of_registration'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('date_of_registration') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="passport_image" class="col-sm-4 col-form-label text-md-right">{{ __('Passport image') }}</label>
                                    <div class="col-md-6">
                                        <input id="passport_image" type="file" class="form-control{{ $errors->has('passport_image') ? ' is-invalid' : '' }}" name="passport_image" value="{{ old('passport_image') }}" required autofocus>

                                        @if ($errors->has('passport_image'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('passport_image') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="passport_image" class="col-sm-4 col-form-label text-md-right">{{ __('Select Member') }}</label>
                                    <div class="col-md-6">
                                        <select id="passport_image" type="file" class="form-control" name="passport_image">
                                            <option value="#" disabled="">~~SELECT MEMBER~~</option>
                                            @foreach($users as $user)
                                                <option value="{{$user->id}}" >{{$user->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary btn-block">
                                            {{ __('Add member') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
