<x-template : activePage="category">

<style>
    #detailImage{
        margin: auto;
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        margin-bottom: 100px;
    }

    p{
        margin-left: 200px;
        margin-right: 200px;
    }

    
</style>
    
    <h1 style="margin-left: 100px !important; margin-top: 100px;">{{$course->category}}</h1>

    <img src="{{ $course->image }}" style="margin-top: 100px;" id="detailImage">

<p>12/03/2024 - By {{$course->writer}}</p>

<!-- add the functionality for the long text here -->
<p class="lead">{{$course->description}}</p>


</x-template>