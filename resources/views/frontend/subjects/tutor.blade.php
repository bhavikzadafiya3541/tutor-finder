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
                                <a href="#more" data-toggle="collapse" aria-expanded="false" class="font-size-14 read-more"></a>
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
