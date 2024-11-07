@extends('layouts.frontend.main')

@section('page_title')
    {{ env('APP_NAME') }}
@endsection

@section('main-title')
    <h1>The <strong>Hub</strong> Of <strong>Tutorials</strong></h1>
@endsection

@section('content')
    <div class="site-section bg-light pb-0">
        <div class="container">
            <div class="row align-items-stretch overlap">
                <div class="col-lg-8">
                    <div class="box h-100">
                        <div class="d-flex align-items-center">
                            <div class="img">
                                <img src="{{ asset('frontend/layouts/images/img_1.jpg') }}" class="img-fluid" alt="Image">
                            </div>
                            <div class="text">
                                <a href="#" class="category">Tutorial</a>
                                <h3><a href="#">Learning React Native</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum quidem totam
                                    exercitationem eveniet blanditiis nulla, et possimus, itaque alias maxime!</p>
                                <p class="mb-0">
                                    <span class="brand-react h5"></span>
                                    <span class="brand-javascript h5"></span>
                                </p>
                                <p class="meta">
                                    <span class="mr-2 mb-2">1hr 24m</span>
                                    <span class="mr-2 mb-2">Advanced</span>
                                    <span class="mr-2 mb-2">Jun 18, 2020</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="box small h-100">
                        <div class="d-flex align-items-center mb-2">
                            <div class="img"><img src="{{ asset('frontend/layouts/images/img_2.jpg') }}"
                                    class="img-fluid" alt="Image"></div>
                            <div class="text">
                                <a href="#" class="category">Tutorial</a>
                                <h3><a href="#">Learning React Native</a></h3>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-2">
                            <div class="img"><img src="{{ asset('frontend/layouts/images/img_3.jpg') }}"
                                    class="img-fluid" alt="Image"></div>
                            <div class="text">
                                <a href="#" class="category">Tutorial</a>
                                <h3><a href="#">Learning React Native</a></h3>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="img"><img src="{{ asset('frontend/layouts/images/img_4.jpg') }}"
                                    class="img-fluid" alt="Image">
                            </div>
                            <div class="text">
                                <a href="#" class="category">Tutorial</a>
                                <h3><a href="#">Learning React Native</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="heading">
                        <span class="caption">Tutorial Courses</span>
                        <h2>Choose Course</h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-stretch">
                <div class="col-lg-2">
                    <a href="#" class="course">
                        <span class="wrap-icon brand-adobeillustrator"></span>
                        <h3>Illustrator</h3>
                    </a>
                </div>
                <div class="col-lg-2">
                    <a href="#" class="course">
                        <span class="wrap-icon brand-adobephotoshop"></span>
                        <h3>Photoshop</h3>
                    </a>
                </div>

                <div class="col-lg-2">
                    <a href="#" class="course">
                        <span class="wrap-icon brand-angular"></span>
                        <h3>Angular</h3>
                    </a>
                </div>

                <div class="col-lg-2">
                    <a href="#" class="course">
                        <span class="wrap-icon brand-javascript"></span>
                        <h3>JavaScript</h3>
                    </a>
                </div>
                <div class="col-lg-2">
                    <a href="#" class="course">
                        <span class="wrap-icon brand-react"></span>
                        <h3>React</h3>
                    </a>
                </div>
                <div class="col-lg-2">
                    <a href="#" class="course">
                        <span class="wrap-icon brand-vue-dot-js"></span>
                        <h3>Vue</h3>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
