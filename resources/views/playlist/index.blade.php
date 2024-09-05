@extends("layouts.master")

@section("content")

    @if (Auth::check())
        <h1 class="text-red-600 font-bold text-3xl">Hier staan je playlists {{ Auth::user()->name }}</h1>
    @else
        <h1 class="text-red-600 font-bold text-3xl">Hier staan je playlists</h1>
    @endif

    <br>
    <a class="hover:bg-amber-50 hover:border-gray-700 hover:rounded-lg p-1 duration-200 text-blue-300"
       href="/playlist/create">Create your playlist</a>

    <ul>
        @foreach($playlists as $playlist)
            <br>
            <li class="text-green-500">
                <a href="/playlist/view/{{$playlist->id}}">
                    {{$playlist->name}}
                </a>
            </li>
        @endforeach

    </ul>
@endsection
