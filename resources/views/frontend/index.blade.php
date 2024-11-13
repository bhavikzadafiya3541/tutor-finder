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
            <div class="overlap row justify-content-center">
                <div class="col-lg-10">
                    <div class="main-subject-card card box mb-3">
                        <div class="d-flex">
                            <div class="img">
                                <img src="{{ asset('frontend/layouts/images/img_1.jpg') }}" class="img-fluid" alt="Image">
                            </div>
                            <div class="description">
                                <h3><a href="" class="font-size-24">Tutorial Name 1</a></h3>
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
                                <a href="#more" data-toggle="collapse" aria-expanded="false"
                                    class="font-size-14 read-more"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
