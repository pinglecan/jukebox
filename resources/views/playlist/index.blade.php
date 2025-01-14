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
        @if (!session()->has('tempPlaylist'))
            <a class="text-white" href="{{route("playlist.TempPlaylist")}}">Turn temporary playlist into actual
                playlist</a>
        @endif

        @foreach($playlists as $playlist)
            @if(Auth::user())
                @if ($playlist->user_id == Auth::user()->id)
                    <br>
                    <li class="text-green-500">
                        <a href="/playlist/view/{{$playlist->id}}">
                            {{$playlist->name}}
                        </a>
                    </li>
                @endif
            @endif
        @endforeach

    </ul>
@endsection

@push('footerStyle')

    fixed bottom-0

@endpush
