@extends("layouts.master")


@section("content")

    <h1 class="text-red-600 font-bold text-3xl">sick ass song pagina</h1>
    <br><br>
    <a class="hover:bg-amber-50 hover:border-gray-700 hover:rounded-lg p-1 duration-200 text-blue-300"
       href="/songs/create">Create a song</a>
    <br><br>
    <h2 class="text-red-500"> Hier is de lijst met alle liedjes </h2>
    <ul>
        @foreach($songs as $song)
            <br>
            <li class="text-green-500">
                <a href="/songs/view/{{$song->id}}">
                {{$song->name}}-{{$song->genre?->name}}
                </a>
            </li>

        @endforeach

    </ul>

@endsection


