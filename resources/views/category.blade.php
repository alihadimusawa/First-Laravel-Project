<x-template :activePage="'category'">

    <h1 style="margin-left: 100px !important; margin-top: 100px;">
        <!-- Check if there are any courses before accessing the first one -->
        @if($courses->isNotEmpty())
        {{ $courses->first()->category }}
        @else
        No courses found in this category.
        @endif
    </h1>

    <!-- Course -->
    <div class="courseContainer">

        <!-- Loop through each course -->
        @foreach($courses as $course)
        <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border ">
            <div class="col-lg-5 overflow-hidden" id="courseImageContainer">
                <img class="rounded-lg-6" src="{{ $course->image }}" alt="Course Image" id="courseImage">
            </div>
            <div class="col-lg-7">
                <h1 class="fw-bold lh-1 text-body-emphasis">{{ $course->title }}</h1>
                <p>12/03/2024.</p><p class="lead">{{
                    Str::substr($course->description, 0, 200)
                }}...</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
                    <button type="button" class="btn btn-primary btn-lg px-4 me-md-2 fw-bold" id="primary">
                        <a href="/course/{{$course->id}}" style="color: white;text-decoration:none;">Read More</a>
                    </button>
                </div>
            </div>
        </div>
        @endforeach

    </div>

</x-template>