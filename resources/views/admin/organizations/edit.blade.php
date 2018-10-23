@extends('layouts.app')

@section('content')
    @if(Auth::user()->role_id == 1 or Auth::user()->role_id == 2 or Auth::user()->role_id == 3 or Auth::user()->role_id == 4)
    <div  style="margin:0px 20px 0px  20px;">
        <div class="row">
            @include('partials.leftnavbar')
            <div class="col-md-9">
                @include('admin.organizations.partial.topnavbar')
                <br>
                <div class="container">
                    <div class="card">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif
                        <div class="card-header" style="background:#8B8B8B; color: black; "><h5 style="text-align: center;">{{ __('Edit Organization') }}: {{$organization->organization_name}}</h5></div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('saccos.update.organization',['id'=>$organization->id]) }}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <label for="organization_name" class="col-sm-4 col-form-label text-md-right">{{ __('Organizations Name') }}</label>
                                    <div class="col-md-6">
                                        <input id="organization_name" type="text" class="form-control{{ $errors->has('organization_name') ? ' is-invalid' : '' }}" name="organization_name" value="{{ $organization->organization_name }}" required autofocus>

                                        @if ($errors->has('organization_name'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('organization_name') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="location" class="col-sm-4 col-form-label text-md-right">{{ __('Location') }}</label>
                                    <div class="col-md-6">
                                        <input id="location" type="text" class="form-control{{ $errors->has('location') ? ' is-invalid' : '' }}" name="location" value="{{ $organization->location }}" required autofocus>

                                        @if ($errors->has('location'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('location') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="functionality" class="col-sm-4 col-form-label text-md-right">{{ __('Functionality') }}</label>
                                    <div class="col-md-6">
                                        <input id="functionality" type="text" class="form-control{{ $errors->has('functionality') ? ' is-invalid' : '' }}" name="functionality" value="{{ $organization->functionality }}" required autofocus>

                                        @if ($errors->has('functionality'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('functionality') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="logo" class="col-sm-4 col-form-label text-md-right">{{ __('Logo') }}</label>
                                    <div class="col-md-6">
                                        <input id="logo" type="file" class="form-control{{ $errors->has('logo') ? ' is-invalid' : '' }}" name="logo">
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary btn-block">
                                            {{ __('Edit Organization') }}
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
        @else
        <div>
            <h1 style="font-size: 100px; text-align:center;">404</h1>
        </div>
    @endif

@endsection
