@extends('layouts.main')

@section('page_title')
    {{ __('Cities') }}
@endsection

@section('main-title')
    {{ isset($city) && !empty($city) ? __('Edit City') : __('Create City') }}
@endsection

@section('bread-crumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item">
            <a href="{{ route('admin.dashboard') }}">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
            <a href="{{ route('admin.cities.index') }}">Cities</a>
        </li>
        <li class="breadcrumb-item">{{ isset($city) && !empty($city) ? "Edit" : "Create" }}</li>
    </ol>
@endsection

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ isset($city) && !empty($city) ? "Edit City" : "Create City" }}</h3>
        </div>
        <form method="POST" action="{{ isset($city) && !empty($city) ? route('admin.cities.update', $city) : route('admin.cities.store') }}">
            @csrf
            @if (isset($city) && !empty($city))
                @method('PUT')
            @endif
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Enter City Name" value="{{ isset($city) && !empty($city) ? $city->name : old('name') }}">
                    @error('name')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">{{ isset($city) && !empty($city) ? "Edit" : "Create" }}</button>
                <a href="{{ route('admin.cities.index') }}" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
@endsection
