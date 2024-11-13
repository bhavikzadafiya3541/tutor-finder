@extends('layouts.frontend.main')

@section('page_title')
    {{ env('APP_NAME') }} | Subjects
@endsection

@section('main-title')
    <h1>Subjects</h1>
@endsection

@section('content')
    <div class="subject-section pt-5">
        <div class="container">
            <div class="search-filter d-flex align-items-center justify-content-end pb-3 row mx-0">
                <div class="position-relative col-lg-4 px-0">
                    <input type="search" placeholder="search city" class="form-control ml-auto">
                    <div class="position-absolute search-icon">
                        <i class="icon-search"></i>
                    </div>
                </div>
            </div>
            <div class="subject-card py-3">
                <div class="row tutor-card">
                    <div class="col-lg-4">
                        <div class="card px-3 py-4">
                            <div class="profile-img mx-auto mb-3">
                                <img class="w-100 h-100 rounded-circle"
                                    src="https://plus.unsplash.com/premium_photo-1689568126014-06fea9d5d341?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTN8fHByb2ZpbGUlMjBwaWN0dXJlfGVufDB8fDB8fHww"
                                    alt="">
                            </div>
                            <h4 class="text-center">Tutor Name</h4>
                            <p class="font-size-14">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                been the industrys standard dummy text ever since the 1500s, when an unknown printer took a
                                galley of type and scrambled it to make a type specimen book.</p>
                            <div class="city-list d-flex align-items-center pb-2">
                                <span class="cities">Cities : &nbsp;</span>
                                <p class="mb-0 d-flex flex-wrap font-size-14"><span>Surat</span></p>
                            </div>
                            <div class="city-list d-flex align-items-center pb-2">
                                <span class="cities">Subject : &nbsp;</span>
                                <p class="mb-0 d-flex flex-wrap font-size-14"><span>Tutor Subject</span><span>Tutor Subject</span></p>
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
                            <p class="font-size-14">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                been the industrys standard dummy text ever since the 1500s, when an unknown printer took a
                                galley of type and scrambled it to make a type specimen book.</p>
                            <div class="city-list d-flex align-items-center pb-2">
                                <span class="cities">Cities : &nbsp;</span>
                                <p class="mb-0 d-flex flex-wrap font-size-14"><span>Surat</span></p>
                            </div>
                            <div class="city-list d-flex align-items-center pb-2">
                                <span class="cities">Subject : &nbsp;</span>
                                <p class="mb-0 d-flex flex-wrap font-size-14"><span>Tutor Subject</span><span>Tutor Subject</span></p>
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
                            <p class="font-size-14">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                been the industrys standard dummy text ever since the 1500s, when an unknown printer took a
                                galley of type and scrambled it to make a type specimen book.</p>
                            <div class="city-list d-flex align-items-center pb-2">
                                <span class="cities">Cities : &nbsp;</span>
                                <p class="mb-0 d-flex flex-wrap font-size-14"><span>Surat</span></p>
                            </div>
                            <div class="city-list d-flex align-items-center pb-2">
                                <span class="cities">Subject : &nbsp;</span>
                                <p class="mb-0 d-flex flex-wrap font-size-14"><span>Tutor Subject</span><span>Tutor Subject</span></p>
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
                            <p class="font-size-14">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                been the industrys standard dummy text ever since the 1500s, when an unknown printer took a
                                galley of type and scrambled it to make a type specimen book.</p>
                            <div class="city-list d-flex align-items-center pb-2">
                                <span class="cities">Cities : &nbsp;</span>
                                <p class="mb-0 d-flex flex-wrap font-size-14"><span>Surat</span></p>
                            </div>
                            <div class="city-list d-flex align-items-center pb-2">
                                <span class="cities">Subject : &nbsp;</span>
                                <p class="mb-0 d-flex flex-wrap font-size-14"><span>Tutor Subject</span><span>Tutor Subject</span></p>
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
            <div class="pt-4">
                <nav aria-label="Page navigation example">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </nav>
            </div>
        </div>
    </div>
@endsection
