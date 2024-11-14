@extends('layouts.main')

@section('page_title')
    {{ __('Subjects') }}
@endsection

@section('main-title')
    {{ isset($subject) && !empty($subject) ? __('Edit Subject') : __('Create Subject') }}
@endsection

@section('bread-crumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item">
            <a href="{{ route('admin.dashboard') }}">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
            <a href="{{ route('admin.subjects.index') }}">Subjects</a>
        </li>
        <li class="breadcrumb-item">{{ isset($subject) && !empty($subject) ? "Edit" : "Create" }}</li>
    </ol>
@endsection

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ isset($subject) && !empty($subject) ? "Edit Subject" : "Create Subject" }}</h3>
        </div>
        <form method="POST" action="{{ isset($subject) && !empty($subject) ? route('admin.subjects.update', $subject) : route('admin.subjects.store') }}">
            @csrf
            @if (isset($subject) && !empty($subject))
                @method('PUT')
            @endif
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Enter Subject Name" value="{{ isset($subject) && !empty($subject) ? $subject->name : old('name') }}">
                    @error('name')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">{{ isset($subject) && !empty($subject) ? "Edit" : "Create" }}</button>
                <a href="{{ route('admin.subjects.index') }}" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
@endsection
