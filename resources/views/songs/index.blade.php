@extends("layouts.master")


@section("content")

    <h1 class="text-red-600 font-bold text-3xl">sick ass song pagina</h1>

    dit is de session
    {{var_dump(session("tempSongs"))}};
    <br><br>
    <a class="hover:bg-amber-50 hover:border-gray-700 hover:rounded-lg p-1 duration-200 text-blue-300"
       href="/songs/create">Create a song</a>
    <br><br>
    <ul>
        @foreach($songs as $song)
            <br>
            <li class="text-green-500">
                <a href="/songs/view/{{$song->id}}">
                {{$song->name}}-{{$song->genre?->name}}
                     </a>
                <a class="text-sky-600" href="/songs/addToTempPlaylist/{{$song->id}}">add to temporary playlist</a>
            </li>

        @endforeach

    </ul>

@endsection

@push('footerStyle')

    fixed bottom-0

@endpush

