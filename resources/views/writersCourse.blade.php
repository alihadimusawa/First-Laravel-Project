<x-template : activePage="writers">

    <style>
        .writer {
            display: flex;
            flex-direction: row;
            justify-content: space-around;
            align-items: start;
            margin-left: 5vw;
            width: 40vw;
            margin-top: 50px;
        }

        .name{
            display: flex;
            height: 13vw;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .writer img {
            width: 300px;
            height: 300px;
            object-fit: cover;
            border-radius: 100%;
            border: 1px solid black;
        }

        .bold {
            font-weight: 900;
        }
    </style>

    <div class="writer">
        <img src="{{$courses->first()->writerImage}}" alt="">
        <div class="name">
            <p class="bold" style="align-self: center;">{{$courses->first()->writer}}</p>
            <p style="align-self: center;">{{$courses->first()->specialist}}</p>
        </div>
    </div>

    <!-- Course -->
    <div class="courseContainer">
        
    @foreach($courses as $course)
    <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border ">
            <div class="col-lg-5  overflow-hidden " id="courseImageContainer">
                <img class="rounded-lg-6" src="{{ $course->image }}" alt="" id="courseImage">
            </div>
            <div class="col-lg-7 ">
                <h1 class=" fw-bold lh-1 text-body-emphasis">{{ $course->title }}</h1>
                <p>12/03/2024. By {{$course->writer}}</p>

                <!-- add the functionality for the long text here -->
                <p class="lead">{{
                    Str::substr($course->description, 0, 200)
                }}...</p>


                <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
                    <button type="button" class="btn btn-primary btn-lg px-4 me-md-2 fw-bold" id="primary" >
                    <a href="/course/{{$course->id}}" style="color: white;text-decoration:none;" >Read More</a>
                    </button>
                </div>
            </div>
        </div>
        @endforeach
    </div>

</x-template>