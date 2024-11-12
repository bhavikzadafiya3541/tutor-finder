@extends('layouts.frontend.main')

@section('page_title')
    {{ env('APP_NAME') }} | Subjects
@endsection

@section('main-title')
    <h1>Subjects</h1>
@endsection

@push('custom-styles')
    <style>
        .subject-section .profile-img {
            width: 120px;
            height: 120px
        }

        img {
            object-fit: cover;
            object-position: top;
        }

        .subject-section .subject-card p {
            font-size: 14px
        }

        .subject-section .search-filter .search-icon {
            top: 5px;
            right: 10px;
        }

        .subject-section .search-filter .search-icon i {
            color: #aaaaaa;
        }

        input[type="search"]::-webkit-search-cancel-button {
            display: none;
        }

        .subject-section .city-list p {
            column-gap: 10px;
        }

        .subject-section .city-list .cities {
            min-width: 40px;
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
    </style>
@endpush

@section('content')
    <div class="subject-section pt-5">
        <div class="container">
            <div class="search-filter d-flex align-items-center justify-content-end pb-3 row">
                <div class="position-relative col-lg-5 px-0">
                    <input type="search" placeholder="search city" class="form-control w-100">
                    <div class="position-absolute search-icon">
                        <i class="icon-search"></i>
                    </div>
                </div>
            </div>
            <div class="subject-card py-3 mb-5">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card px-3 py-4">
                            <div class="profile-img mx-auto mb-3">
                                <img class="w-100 h-100 rounded-circle"
                                    src="https://plus.unsplash.com/premium_photo-1689568126014-06fea9d5d341?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTN8fHByb2ZpbGUlMjBwaWN0dXJlfGVufDB8fDB8fHww"
                                    alt="">
                            </div>
                            <h4 class="text-center">Tutor Name</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                been the industrys standard dummy text ever since the 1500s, when an unknown printer took a
                                galley of type and scrambled it to make a type specimen book.</p>
                            <div class="city-list d-flex align-items-center pb-2">
                                <span class="cities">Cities : &nbsp;</span>
                                <p class="mb-0 d-flex flex-wrap"><span>Surat</span></p>
                            </div>
                            <div class="text-right">
                                <a href="{{ route('frontend.subject.tutor', 1) }}" class="font-weight-semibold"> <span
                                        class="mr-2">Subject tutor page</span> <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card px-3 py-4">
                            <div class="profile-img mx-auto mb-3">
                                <img class="w-100 h-100 rounded-circle"
                                    src="https://plus.unsplash.com/premium_photo-1689568126014-06fea9d5d341?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTN8fHByb2ZpbGUlMjBwaWN0dXJlfGVufDB8fDB8fHww"
                                    alt="">
                            </div>
                            <h4 class="text-center">Tutor Name</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                been the industrys standard dummy text ever since the 1500s, when an unknown printer took a
                                galley of type and scrambled it to make a type specimen book.</p>
                            <div class="city-list d-flex align-items-center pb-2">
                                <span class="cities">Citie : &nbsp;</span>
                                <p class="mb-0 d-flex flex-wrap"><span>Surat</span></p>
                            </div>
                            <div class="text-right">
                                <a href="{{ route('frontend.subject.tutor', 1) }}" class="font-weight-semibold"> <span
                                        class="mr-2">Subject tutor page</span> <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card px-3 py-4">
                            <div class="profile-img mx-auto mb-3">
                                <img class="w-100 h-100 rounded-circle"
                                    src="https://plus.unsplash.com/premium_photo-1689568126014-06fea9d5d341?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTN8fHByb2ZpbGUlMjBwaWN0dXJlfGVufDB8fDB8fHww"
                                    alt="">
                            </div>
                            <h4 class="text-center">Tutor Name</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                been the industrys standard dummy text ever since the 1500s, when an unknown printer took a
                                galley of type and scrambled it to make a type specimen book.</p>
                            <div class="city-list d-flex align-items-center pb-2">
                                <span class="cities">Citie : &nbsp;</span>
                                <p class="mb-0 d-flex flex-wrap"><span>Surat</span></p>
                            </div>
                            <div class="text-right">
                                <a href="{{ route('frontend.subject.tutor', 1) }}" class="font-weight-semibold"> <span
                                        class="mr-2">Subject tutor page</span> <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
