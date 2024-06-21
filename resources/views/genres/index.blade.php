@extends("layouts.master")


@section("content")
    <h1 class="text-red-600 font-bold text-3xl">sick ass genres pagina</h1>
    <br><br>
    <a class="hover:bg-amber-50 hover:border-gray-700 hover:rounded-lg p-1 duration-200 text-green-700"
       href="/genres/create">create</a> <br>
    <h2 class="text-red-500"> Hier is de lijst met alle genres en het aantal liedjes met deze genre </h2>

    <ul>
        @foreach($genres as $genre)
            <br>
            <li class="text-blue-300">
                {{$genre->name}}-{{$genre->songs->count()}}
            </li>
        @endforeach

    </ul>
@endsection
