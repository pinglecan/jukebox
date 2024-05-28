@extends("layouts.master")


@section("content")

    <h1 class="text-red-600 font-bold text-3xl">sick ass song pagina</h1>
    <br><br>

    <h2 class="text-red-500"> Hier is de lijst met alle liedjes </h2>
    <ul>
        @foreach($songs as $song)
            <br>
            <li class="text-blue-300">
                {{$song->name}}-{{$song->genre->name}}
            </li>

        @endforeach

    </ul>

@endsection


