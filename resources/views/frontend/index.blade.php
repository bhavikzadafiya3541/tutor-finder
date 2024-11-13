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
                            <div class="description">
                                <h3>
                                    <span class="font-size-24">Overview</span>
                                </h3>
                                <p class="mb-0 font-size-14">
                                    The Tutor Finder platform is an innovative online solution designed to connect students with qualified tutors. The primary purpose of the platform is to simplify the process of finding and hiring a tutor who matches a student's specific academic needs, learning style, and schedule.
                                </p>
                                <h3>
                                    <span class="font-size-24">Key Features and Purpose:</span>
                                </h3>
                                <ul>
                                    <li>
                                        <span class="font-weight-bold">Personalized Matches: </span>
                                        Students can search for tutors based on subjects, expertise level, availability, and location (for in-person sessions).
                                    </li>
                                    <li>
                                        <span class="font-weight-bold">Comprehensive Tutor Profiles: </span>
                                        Detailed profiles include qualifications, experience, reviews, and ratings to help students make informed decisions.
                                    </li>
                                    <li>
                                        <span class="font-weight-bold">Flexible Learning Options: </span>
                                        Supports both in-person and virtual tutoring sessions, catering to various learning preferences.
                                    </li>
                                    <li>
                                        <span class="font-weight-bold">Secure Communication: </span>
                                        Ensures safe and efficient communication between tutors and students via integrated chat and scheduling tools.
                                    </li>
                                    <li>
                                        <span class="font-weight-bold">Streamlined Booking Process: </span>
                                        Simplifies scheduling and payments through a user-friendly interface, enabling seamless transactions.
                                    </li>
                                </ul>
                                <p class="mb-0 font-size-14">
                                    The goal of the Tutor Finder platform is to empower learners to reach their educational goals by providing easy access to quality tutoring services, fostering a more personalized and effective learning experience.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
