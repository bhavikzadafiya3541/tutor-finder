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
            @if (isset($tutors) && $tutors->isNotEmpty())
                <div class="search-filter d-flex align-items-center justify-content-end pb-3 row mx-0">
                    <div class="position-relative col-lg-4 px-0">
                        <input type="search" name="search" placeholder="Search..." class="form-control ml-auto" onkeyup="searchByCity(this);">
                        <div class="position-absolute search-icon">
                            <i class="icon-search"></i>
                        </div>
                    </div>
                </div>
            @endif
            <div class="subjects-records">
                @include('frontend.subjects.tutor-records')
            </div>
        </div>
    </div>
@endsection

@push('custom-scripts')
    <script>
        const searchByCity = (data) => {
            const keyword = $(data).val();

            $.ajax({
                url: "{{ route('frontend.subjects') }}",
                type: "GET",
                dataType: "JSON",
                data: {
                    "keyword": keyword
                },
                success: (response) => {
                    if(response.success) {
                        $('.subjects-records').html(response.html);
                    }
                },
                error: (error) => {
                    console.error("Error: ", error);
                }
            });
        };
    </script>
@endpush
