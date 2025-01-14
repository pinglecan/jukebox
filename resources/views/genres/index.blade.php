@extends("layouts.master")


@section("content")
    <h1 class="text-red-600 font-bold text-3xl">sick ass genres pagina</h1>
    <br><br>
    <a class="hover:bg-amber-50 hover:border-gray-700 hover:rounded-lg p-1 duration-200 text-blue-300"
       href="/genres/create">create</a> <br>

    <ul>
        @foreach($genres as $genre)
            <br>
            <li class="text-green-500">
                <a href="{{route('genres.show',$genre)}}">{{$genre->name}}-{{$genre->songs->count()}}</a>
            </li>
        @endforeach

    </ul>
@endsection
