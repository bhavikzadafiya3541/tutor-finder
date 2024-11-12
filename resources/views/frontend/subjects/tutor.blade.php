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


        .subject-detail-section .profile-img {
            width: 200px;
            height: 200px;
        }

        .subject-detail-section .right-part p {
            overflow: hidden;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 3;
        }

        .subject-detail-section .right-part {
            max-height: 560px;
            overflow-y: auto;
        }

        .subject-detail-section ::-webkit-scrollbar {
            width: 0px;
        }

        .subject-detail-section .right-part:hover::-webkit-scrollbar {
            width: 3px;
        }

        .subject-detail-section ::-webkit-scrollbar-thumb {
            background: #cac9c9;
            border-radius: 100px;
        }

        .subject-detail-section .back-btn {
            margin-top: -70px;
            position: relative;
            z-index: 99;
        }

        .collapse.in {
            display: inline !important;
        }

        p:has(.show) {
            -webkit-line-clamp: inherit !important;
        }

        .subject-detail-section .description a::after {
            position: absolute;
            content: "Read More"
        }

        a[aria-expanded="true"]:before {
            position: absolute;
            content: "Read Less"
        }

        a[aria-expanded="true"]:after {
            display: none;
        }
    </style>
@endpush

@section('content')
    <div class="subject-detail-section mt-5" id="subject-tutor-page">
        <div class="container">
            <div class="back-btn">
                <button class="btn btn-primary text-white"><i class="fa-solid fa-chevron-left"></i> Back</button>
            </div>
            <div class="row subject-detail-card pt-5">
                <div class="col-lg-8">
                    <div class="card right-part p-4">
                        <div class="pb-3">
                            <div class="d-flex align-items-center mb-3">
                                <h6 class="mb-0 font-weight-bold">Subject : </h6>
                                <h5 class="mb-0 pl-2 font-size-16">Tutor Name</h5>
                            </div>
                            <div class="description">
                                <h5 class="mb-2 font-weight-bold font-size-18">Subject Description : </h5>
                                <p class="mb-0 font-size-14">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. Lorem Ipsum has
                                    been the industrys standard dummy text ever since the 1500s, when an unknown printer
                                    took a
                                    galley of type and scrambled it to make a type specimen book.
                                    <span class="collapse" id="more">
                                        1500s, when an unknown printer took a galley of type and scrambled it to make a type
                                        specimen book. It has survived not only five centuries, but also the leap into
                                        electronic typesetting, remaining essentially unchanged.
                                    </span>
                                </p>
                                <a href="#more" data-toggle="collapse" aria-expanded="false" class="font-size-14"></a>
                            </div>
                        </div>
                        <hr />
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card left-part p-4">
                        <div class="profile-img mx-auto">
                            <img class="w-100 h-100 rounded-circle"
                                src="https://plus.unsplash.com/premium_photo-1689568126014-06fea9d5d341?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTN8fHByb2ZpbGUlMjBwaWN0dXJlfGVufDB8fDB8fHww"
                                alt="">
                        </div>
                        <div class="">
                            <div class="d-flex align-items-center pt-3 justify-content-center">
                                <h6 class="mb-0 font-weight-bold font-size-14">Name : </h6>
                                <h5 class="mb-0 pl-2 font-size-14">Tutor Name</h5>
                            </div>
                            <div class="d-flex align-items-center pt-3 justify-content-center">
                                <h6 class="mb-0 font-weight-bold v">Email : </h6>
                                <h5 class="mb-0 pl-2 font-size-14">tutor1example@gmail.com</h5>
                            </div>
                            <div class="d-flex align-items-center pt-3 justify-content-center">
                                <h6 class="mb-0 font-weight-bold font-size-14">Phone : </h6>
                                <h5 class="mb-0 pl-2 font-size-14">+91 237654 87965</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
