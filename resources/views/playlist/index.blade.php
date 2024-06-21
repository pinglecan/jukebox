@extends("layouts.master")

@section("content")

    <h1 class="text-red-600 font-bold text-3xl">Hier staan je playlists</h1>
    <br>
    <a class="hover:bg-amber-50 hover:border-gray-700 hover:rounded-lg p-1 duration-200 text-green-700"
       href="/playlist/create">Create your playlist</a>

    <ul>
        @foreach($playlists as $playlist)
            <br>
            <li class="text-blue-300">
                <a href="/playlist/view/{{$playlist->id}}">
                    {{$playlist->name}}
                </a>
            </li>
        @endforeach

    </ul>
@endsection

