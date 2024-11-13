<div class="subject-card py-3">
    <div class="row tutor-card">
        @forelse ($tutors as $key => $tutor)
            <div class="col-lg-4">
                <div class="card px-3 py-4">
                    <div class="profile-img mx-auto mb-3">
                        <img class="w-100 h-100 rounded-circle"
                            src="{{ url(Storage::url($tutor->profile_picture)) }}"
                            alt="Profile Picture {{ $key }}">
                    </div>
                    <h4 class="text-center">{{ $tutor->name }}</h4>
                    <p class="font-size-14">{{ $tutor->intro }}</p>
                    <div class="city-list d-flex align-items-center pb-2">
                        <span class="cities">Cities : &nbsp;</span>
                        <p class="mb-0 d-flex flex-wrap font-size-14">
                            @foreach ($tutor->cities as $city)
                                <span>{{ $city->name }}</span>
                            @endforeach
                        </p>
                    </div>
                    <div class="subject-list d-flex align-items-center pb-2">
                        <span class="subjects">Subject : &nbsp;</span>
                        <p class="mb-0 d-flex flex-wrap font-size-14">
                            @foreach ($tutor->subjects as $subject)
                                <span>{{ $subject->name }}</span>
                            @endforeach
                        </p>
                    </div>
                    <div class="text-right">
                        <a href="{{ route('frontend.subject.tutor', $tutor) }}" class="font-weight-semibold">
                            <span class="mr-2">Subject Tutor</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-lg-12">
                <p class="text-center">Records Not Found!</p>
            </div>
        @endforelse
    </div>
</div>
<div class="pt-4">
    {{ $tutors->links() }}
</div>
