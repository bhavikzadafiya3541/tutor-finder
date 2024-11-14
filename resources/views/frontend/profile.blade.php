@extends('layouts.frontend.main')

@section('page_title')
    {{ env('APP_NAME') }} | Profile
@endsection

@section('main-title')
    <h1>
        <strong>Profile</strong>
    </h1>
@endsection

@push('custom-styles')
    <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet" />
@endpush

@section('content')
    <div class="site-section" id="profile-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <form action="{{ route('frontend.profile.update', $tutor->user) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="first_name">First Name</label>
                                <input type="text" id="first_name" name="first_name"
                                    class="form-control @error('first_name') is-invalid @enderror"
                                    placeholder="Enter First Name"
                                    value="{{ isset($tutor->first_name) ? $tutor->first_name : old('first_name') }}">
                                @error('first_name')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="last_name">Last Name</label>
                                <input type="text" id="last_name" name="last_name"
                                    class="form-control @error('last_name') is-invalid @enderror"
                                    placeholder="Enter Last Name"
                                    value="{{ isset($tutor->last_name) ? $tutor->last_name : old('last_name') }}">
                                @error('last_name')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="email">Email Address</label>
                                <input type="email" id="email" name="email" class="form-control"
                                    value="{{ isset($tutor->email) ? $tutor->email : old('email') }}"
                                    placeholder="Enter Email Address" readonly>
                            </div>
                            <div class="col-md-6">
                                <label for="phone">Phone</label>
                                <input type="text" id="phone" name="phone"
                                    class="form-control @error('phone') is-invalid @enderror"
                                    placeholder="Enter Phone Number"
                                    value="{{ isset($tutor->phone) ? $tutor->phone : old('phone') }}">
                                @error('phone')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-2">
                            <div class="col-md-12">
                                <label for="intro">Intro</label>
                                <textarea name="intro" class="form-control @error('intro') is-invalid @enderror" placeholder="Enter Intro"
                                    id="intro" cols="30" rows="5">{{ isset($tutor->intro) ? $tutor->intro : old('intro') }}</textarea>
                                @error('intro')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        @if (isset($tutor->profile_picture) && !empty($tutor->profile_picture))
                            <div>
                                <img src="{{ url(Storage::url($tutor->profile_picture)) }}" width="100" height="100"
                                    class="w-full" />
                            </div>
                        @endif

                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="profile_picture">Profile Picture</label>
                                <input type="file" id="profile_picture" name="profile_picture"
                                    class="form-control @error('profile_picture') is-invalid @enderror">
                                @error('profile_picture')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="cities">Cities</label>
                                <select class="form-control" id="cities" name="cities[]" multiple="multiple">
                                    @foreach ($cities as $city)
                                        <option value="{{ $city->id }}"
                                            {{ isset($selectedCities) && in_array($city->id, $selectedCities) ? 'selected' : '' }}>
                                            {{ $city->name }}</option>
                                    @endforeach
                                </select>
                                @error('cities')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row select-subject">
                            <div class="col-md-12">
                                <label for="subjects">Subjects</label>
                                <div class="append_subjects">
                                    @if(isset($selectedSubjects) && $selectedSubjects->isNotEmpty())
                                        @foreach ($selectedSubjects as $key => $selectedSubject)
                                            <div class="row align-items-baseline {{ $loop->first ? '' : 'remove-subjects mt-2' }}">
                                                <div class="col-lg-6">
                                                    <select class="form-control" id="subject_{{ $key }}" name="subjects[{{ $key }}][id]">
                                                        <option value="">Select a Subject</option>
                                                        @foreach ($subjects as $subject)
                                                            <option value="{{ $subject->id }}"
                                                                {{ $selectedSubject->id === $subject->id ? 'selected' : '' }}>
                                                                {{ $subject->name }}</option>
                                                        @endforeach
                                                    </select>
                                                    <small class="text-danger subject_{{ $key }}_error"></small>
                                                </div>
                                                <div class="col-lg-5 px-0">
                                                    <div>
                                                        <input type="text" name="subjects[{{ $key }}][description]" id="description_{{ $key }}" class="form-control" placeholder="Enter Description" value="{{ $selectedSubject->pivot->description }}" />
                                                    </div>
                                                    <small class="text-danger description_{{ $key }}_error"></small>
                                                </div>
                                                <div class="col-lg-1 px-0">
                                                    <div class="add-more d-flex justify-content-center">
                                                        @if($loop->first)
                                                            <button type="button" onclick="addMoreSubjects(this);" data-count="{{ count($selectedSubjects) - 1 }}"
                                                                class="bg-primary border-0 d-flex align-items-center add-more-subject justify-content-center">
                                                                <i class="icon-plus text-white"></i>
                                                            </button>
                                                        @else
                                                            <button type="button" class="bg-primary border-0 d-flex align-items-center justify-content-center" data-count="{{ count($selectedSubjects) - 1 }}" onclick="removeSubject(this);">
                                                                <i class="icon-minus text-white"></i>
                                                            </button>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @else
                                        <div class="row align-items-baseline">
                                            <div class="col-lg-6">
                                                <select class="form-control" id="subject_0" name="subjects[0][id]">
                                                    <option value="">Select a Subject</option>
                                                    @foreach ($subjects as $subject)
                                                        <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                                                    @endforeach
                                                </select>
                                                <small class="text-danger subject_0_error"></small>
                                            </div>
                                            <div class="col-lg-5 px-0">
                                                <div>
                                                    <input type="text" name="subjects[0][description]" id="description_0" class="form-control" placeholder="Enter Description" />
                                                </div>
                                                <small class="text-danger description_0_error"></small>
                                            </div>
                                            <div class="col-lg-1 px-0">
                                                <div class="add-more d-flex justify-content-center">
                                                    <button type="button" onclick="addMoreSubjects(this);" data-count="0"
                                                        class="bg-primary border-0 d-flex align-items-center add-more-subject justify-content-center">
                                                        <i class="icon-plus text-white"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-2 mt-2 mx-auto">
                                <button type="submit" class="btn btn-block btn-primary text-white">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        @if (isset($tutor->user) && is_null($tutor->user->password))
            <div class="modal fade" id="updatePasswordModal" tabindex="-1" role="dialog"
                aria-labelledby="updatePasswordModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="updatePasswordModalLabel">Set Password</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="{{ route('frontend.update.password', Auth::id()) }}" method="post">
                            @csrf
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="password" name="password" class="form-control" id="password"
                                                placeholder="Enter Password" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="password_confirmation">Confirm Password</label>
                                            <input type="password" name="password_confirmation" class="form-control"
                                                id="password_confirmation" placeholder="Enter Confirm Password" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Update Password</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection

@push('custom-scripts')
    <script src="{{ asset('js/select2.min.js') }}"></script>
    <script>
        const isPasswordSet = '<?php echo isset($tutor->user) && is_null($tutor->user->password) ? true : false; ?>';

        const subjects = @json($subjects);

        if (isPasswordSet) {
            $("#updatePasswordModal").modal({
                backdrop: "static",
                keyboard: false,
                scroll: false,
            });
        }

        $(document).ready(function() {
            $('#cities').select2({
                placeholder: "Select a City"
            });

            if(subjects && subjects.length) {
                subjects.forEach((subject, index) => {
                    $(`#subject_${index}`).select2({
                        placeholder: "Select a Subject"
                    });
                });
            } else {
                $('#subject_0').select2({
                    placeholder: "Select a Subject"
                });
            }
        });

        const addMoreSubjects = (data) => {
            let count = $(data).attr('data-count');
                count = parseInt(count);

            $(`.subject_${count}_error`).html('');
            $(`.description_${count}_error`).html('');

            if($(`#subject_${count}`).val() == "" || $(`#subject_${count}`).val() == null) {
                $(`.subject_${count}_error`).html('This Subject field is required!');
                return false;
            }

            if($(`#description_${count}`).val() == "" || $(`#description_${count}`).val() == null) {
                $(`.description_${count}_error`).html('This Description field is required!');
                return false;
            }

            let increment = ++count;

            let html = ``;
                html += `<div class="row align-items-baseline remove-subjects mt-2">`;
                html += `<div class="col-lg-6">`;
                html += `<select class="form-control" id="subject_${increment}" name="subjects[${increment}][id]">`;
                html += `<option value="">Select a Subject</option>`;
                subjects.forEach((subject, index) => {
                    html += `<option value="${subject.id}">${subject.name}</option>`;
                });
                html += `</select>`;
                html += `<small class="text-danger subject_${increment}_error"></small>`;
                html += `</div>`;
                html += `<div class="col-lg-5 px-0">`;
                html += `<div>`;
                html += `<input type="text" id="description_${increment}" name="subjects[${increment}][description]" class="form-control" placeholder="Enter Description" />`;
                html += `</div>`;
                html += `<small class="text-danger description_${increment}_error"></small>`;
                html += `</div>`;
                html += `<div class="col-lg-1 px-0">`;
                html += `<div class="add-more d-flex justify-content-center">`;
                html += `<button type="button" class="bg-primary border-0 d-flex align-items-center justify-content-center" data-count="${increment}" onclick="removeSubject(this);">`;
                html += `<i class="icon-minus text-white"></i>`;
                html += `</button>`;
                html += `</div>`;
                html += `</div>`;
                html += `</div>`;

            $('.add-more-subject').attr('data-count', increment);

            $('.append_subjects').append(html);

            $(`#subject_${increment}`).select2({
                placeholder: "Select a Subject"
            });
        };

        const removeSubject = (data) => {
            let count = $(data).attr('data-count');
                count = parseInt(count);
                count = Math.max(0, count - 1);

            $('.add-more-subject').attr('data-count', count);

            $(data).parents('.remove-subjects').remove();
        };
    </script>
@endpush
