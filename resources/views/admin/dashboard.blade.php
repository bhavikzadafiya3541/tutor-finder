@extends('layouts.main')

@section('page_title')
    Dashboard
@endsection

@section('main-title')
    Dashboard
@endsection

@section('bread-crumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item">Dashboard</li>
    </ol>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{ $tutorsCount ?? 0 }}</h3>
                    <p>Total Tutors</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person"></i>
                </div>
                <a href="{{ route('admin.tutors.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{ $subjectsCount ?? 0 }}</h3>
                    <p>Total Subjects</p>
                </div>
                <div class="icon">
                    <i class="ion ion-document-text"></i>
                </div>
                <a href="{{ route('admin.subjects.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{ $citiesCount ?? 0 }}</h3>
                    <p>Total Cities</p>
                </div>
                <div class="icon">
                    <i class="ion ion-location"></i>
                </div>
                <a href="{{ route('admin.cities.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
@endsection
