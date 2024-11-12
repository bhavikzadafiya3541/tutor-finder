@extends('layouts.frontend.main')

@section('page_title')
    {{ env('APP_NAME') }} | Subject Tutor
@endsection

@section('main-title')
    <h1>Subject Tutor</h1>
@endsection

@push('custom-styles')
    <style>
        img {
            object-fit: cover;
            object-position: top;
        }

        .card {
            box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
            border: 1px solid #e9e8e8;
            transition: .2s;
            border-radius: 10px;
        }

        .card:hover {
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
            transition: .2s;
        }

        .subject-detail-section .left-part h6,
        .subject-detail-section .left-part h5 {
            font-size: 14px;
        }

        .subject-detail-section .profile-img {
            width: 200px;
        }
        .subject-detail-section .right-part h5{
            font-size: 16px;
        }
    </style>
@endpush

@section('content')
    <div class="subject-detail-section mt-5" id="subject-tutor-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card left-part p-4">
                        <div class="profile-img mx-auto">
                            <img class="w-100 h-100 rounded"
                                src="https://plus.unsplash.com/premium_photo-1689568126014-06fea9d5d341?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTN8fHByb2ZpbGUlMjBwaWN0dXJlfGVufDB8fDB8fHww"
                                alt="">
                        </div>
                        <div class="d-flex align-items-center pt-3">
                            <h6 class="mb-0 font-weight-bold">Name : </h6>
                            <h5 class="mb-0 pl-2">Tutor Name</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card p-4">
                        <div class="right-part">
                            <div class="d-flex align-items-center mb-4">
                                <h6 class="mb-0 font-weight-bold">Subject : </h6>
                                <h5 class="mb-0 pl-2">Tutor Name</h5>
                            </div>
                            <div>
                                <h5 class="mb-2 font-weight-bold">Subject Description : </h5>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                    been the industrys standard dummy text ever since the 1500s, when an unknown printer took a
                                    galley of type and scrambled it to make a type specimen book.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
