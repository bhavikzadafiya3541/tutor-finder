@extends('layouts.frontend.main')

@section('page_title')
    {{ env('APP_NAME') }} | Subject Tutor
@endsection

@section('main-title')
    <h1>Subject Tutor</h1>
@endsection

@section('content')
    <div class="subject-detail-section mt-5" id="subject-tutor-page">
        <div class="container">
            <div class="back-btn">
                <a href="{{ route('frontend.subjects') }}" class="btn btn-primary btn-sm text-white">
                    <i class="fa-solid fa-chevron-left"></i> Back To Subjects
                </a>
            </div>
            <div class="row subject-detail-card pt-5">
                <div class="col-lg-8">
                    <div class="card right-part p-4">
                        @foreach ($tutor->subjects as $subject)
                            @if(!$loop->first) <hr /> @endif
                            <div>
                                <div class="d-flex align-items-center mb-3">
                                    <h6 class="mb-0 font-weight-bold">Subject : </h6>
                                    <h5 class="mb-0 pl-2 font-size-16">{{ $subject->name }}</h5>
                                </div>
                                <div class="description">
                                    <h5 class="mb-2 font-weight-bold font-size-18">Subject Description : </h5>
                                    <p class="mb-0 font-size-14">
                                        {{ $subject->pivot->description }}
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card left-part p-4">
                        <div class="profile-img mx-auto">
                            <img class="w-100 h-100 rounded-circle" src="{{ url(Storage::url($tutor->profile_picture)) }}" alt="Profile Picture {{ $tutor->id }}">
                        </div>
                        <div>
                            <div class="d-flex align-items-center pt-3 justify-content-center">
                                <h6 class="mb-0 font-weight-bold font-size-14">Name : </h6>
                                <h5 class="mb-0 pl-2 font-size-14">{{ $tutor->name }}</h5>
                            </div>
                            <div class="d-flex align-items-center pt-3 justify-content-center">
                                <h6 class="mb-0 font-weight-bold v">Email : </h6>
                                <h5 class="mb-0 pl-2 font-size-14">{{ $tutor->email }}</h5>
                            </div>
                            <div class="d-flex align-items-center pt-3 justify-content-center">
                                <h6 class="mb-0 font-weight-bold font-size-14">Phone : </h6>
                                <h5 class="mb-0 pl-2 font-size-14">{{ $tutor->phone }}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
