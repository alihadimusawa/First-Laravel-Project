<x-template : activePage="writers">

    <style>
        .writerContainerContainer{
            padding: 90px;
            display: flex;
            flex-direction: column;
            height: 68vh;
            width: 100%;
            justify-content: space-between;
        }

        .bold{
            font-weight: 900;
        }

        .writerContainer{
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
        }

        .writerContainer img{
            width: 400px;
            height: 400px;
            object-fit: cover;
            border-radius: 100%;
            border: 1px solid black;
        }

        .writer{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            font-size: 1vw;
        }
    </style>

    <div class="writerContainerContainer">
        <h1>Our Writers</h1>

        <div class="writerContainer">
          @foreach($writers as $writer)
          <a href="/writersCourse/{{$writer->writer}}" style="text-decoration: none; color:black;">
          <div class="writer">
                <img src="{{ $writer -> writerImage }}" alt="">
                <p class="bold">{{ $writer -> specialist }}</p>
                <p>{{ $writer->writer }}</p>
            </div>
            </a>
            @endforeach  
        </div>
    </div>

</x-template>