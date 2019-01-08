@extends('layout')

@section('title')

    VinylAnal

@endsection

@section('content')

    <h1>Welcome</h1>

    {{--// the welcome view now has access to the tasks array created in the / route--}}
    {{--// want to list each element of the array a list element within an unordered list--}}
    {{--// standard php method--}}
    {{--//wrapped in an unordered list--}}

    {{--
    <ul>
            <?php foreach ($tasks as $task) : ?>
            <li><?= $task; ?> Php Method</li>
            <?php endforeach; ?>
        </ul>

        --}}

    {{-- as an alternative to the php method
    we can use syntactic sugar provided by Laravel
    --}}

    {{--Here we are utilising the variable passed to the view by the route--}}

    <p> What do you want? {{$foo}}</p>

    <ul>
        @foreach ($tasks as $task)
            <li>{{$task}} Laravel method</li>
        @endforeach
    </ul>


@endsection
