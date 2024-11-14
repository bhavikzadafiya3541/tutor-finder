@extends('layouts.main')

@section('page_title')
    {{ __('Tutors') }}
@endsection

@section('main-title')
    {{ isset($tutor) && !empty($tutor) ? __('Edit Tutor') : __('Create Tutor') }}
@endsection

@section('bread-crumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item">
            <a href="{{ route('admin.dashboard') }}">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
            <a href="{{ route('admin.tutors.index') }}">Tutors</a>
        </li>
        <li class="breadcrumb-item">{{ isset($tutor) && !empty($tutor) ? "Edit" : "Create" }}</li>
    </ol>
@endsection

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ isset($tutor) && !empty($tutor) ? "Edit Tutor" : "Create Tutor" }}</h3>
        </div>
        <form method="POST" action="{{ isset($tutor) && !empty($tutor) ? route('admin.tutors.update', $tutor) : route('admin.tutors.store') }}" enctype="multipart/form-data">
            @csrf
            @if (isset($tutor) && !empty($tutor))
                @method('PUT')
            @endif
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="first_name">First Name</label>
                            <input type="text" name="first_name" class="form-control @error('first_name') is-invalid @enderror" id="first_name" placeholder="Enter First Name" value="{{ isset($tutor) && !empty($tutor) ? $tutor->first_name : old('first_name') }}">
                            @error('first_name')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="last_name">Last Name</label>
                            <input type="text" name="last_name" class="form-control @error('last_name') is-invalid @enderror" id="last_name" placeholder="Enter Last Name" value="{{ isset($tutor) && !empty($tutor) ? $tutor->last_name : old('last_name') }}">
                            @error('last_name')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Enter Email" value="{{ isset($tutor) && !empty($tutor) ? $tutor->email : old('email') }}">
                            @error('email')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" id="phone" placeholder="Enter Phone Number" value="{{ isset($tutor) && !empty($tutor) ? $tutor->phone : old('phone') }}">
                            @error('phone')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Enter Password" value="{{ isset($tutor) && !empty($tutor) ? $tutor->password : old('password') }}">
                            @error('password')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="password_confirmation">Confirm Password</label>
                            <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" placeholder="Enter Confirm Password" value="{{ old('password_confirmation') }}">
                            @error('password_confirmation')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="intro">Intro</label>
                            <textarea name="intro" class="form-control @error('intro') is-invalid @enderror" id="intro" placeholder="Enter Intro" cols="30" rows="5">{{ isset($tutor) && !empty($tutor) ? $tutor->intro : old('intro') }}</textarea>
                            @error('intro')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    @if (isset($tutor->profile_picture) && !empty($tutor->profile_picture))
                        <div class="col-md-12">
                            <img src="{{ url(Storage::url($tutor->profile_picture)) }}" width="100" height="100"
                                class="w-full" />
                        </div>
                    @endif
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="profile_picture">Profile Picture</label>
                            <input type="file" name="profile_picture" class="form-control @error('profile_picture') is-invalid @enderror" id="profile_picture">
                            @error('profile_picture')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">{{ isset($tutor) && !empty($tutor) ? "Edit" : "Create" }}</button>
                <a href="{{ route('admin.tutors.index') }}" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
@endsection
