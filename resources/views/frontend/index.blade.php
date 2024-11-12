@extends('layouts.frontend.main')

@section('page_title')
    {{ env('APP_NAME') }}
@endsection

@section('main-title')
    <h1>The <strong>Hub</strong> Of <strong>Tutorials</strong></h1>
@endsection

@push('custom-styles')
    <style>
        ul li {
            list-style-type: none;
        }

        .more-info {
            gap: 10px;
        }

        p {
            font-size: 14px;
            overflow: hidden;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 4;
        }

        .box .img {
            flex: 0 0 200px;
            margin-right: 20px;
        }
    </style>
@endpush


@section('content')
    <div class="site-section bg-light pb-0">
        <div class="container">
            <div class="overlap row">
                <div class="col-lg-8">
                    <div class="box mb-3">
                        <div class="d-flex">
                            <div class="img">
                                <img src="{{ asset('frontend/layouts/images/img_1.jpg') }}" class="img-fluid" alt="Image">
                            </div>
                            <div class="text">
                                <h3><a href="" class="font-size-24">Tutorial Name 1</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum quidem totam
                                    exercitationem eveniet blanditiis nulla, et possimus, itaque alias maxime!. 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type
                                    specimen book. It has survived not only five centuries, but also the leap into
                                    electronic typesetting, remaining essentially unchanged.</p>
                                <ul class="pl-0 d-flex more-info">
                                    <li><a href="">Subject</a></li>
                                    <li><a href="">Login</a></li>
                                    <li><a href="">Regsiter</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="box mb-3">
                        <div class="d-flex">
                            <div class="img">
                                <img src="{{ asset('frontend/layouts/images/img_1.jpg') }}" class="img-fluid" alt="Image">
                            </div>
                            <div class="text">
                                <h3><a href="" class="font-size-24">Tutorial Name 2</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum quidem totam
                                    exercitationem eveniet blanditiis nulla, et possimus, itaque alias maxime!. 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type
                                    specimen book. It has survived not only five centuries, but also the leap into
                                    electronic typesetting, remaining essentially unchanged.</p>
                                <ul class="pl-0 d-flex more-info">
                                    <li><a href="">Subject</a></li>
                                    <li><a href="">Login</a></li>
                                    <li><a href="">Regsiter</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="box small">
                        <div class="d-flex align-items-center mb-3">
                            <div class="img"><img src="{{ asset('frontend/layouts/images/img_2.jpg') }}"
                                    class="img-fluid" alt="Image"></div>
                            <div class="text">
                                <a href="#" class="category">Tutorial</a>
                                <h3><a href="#">Tutorial Name 1</a></h3>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <div class="img"><img src="{{ asset('frontend/layouts/images/img_3.jpg') }}"
                                    class="img-fluid" alt="Image"></div>
                            <div class="text">
                                <a href="#" class="category">Tutorial</a>
                                <h3><a href="#">Tutorial Name 2</a></h3>
                            </div>
                        </div>                       
                    </div>
                </div>
            </div>
        </div>
    @endsection
