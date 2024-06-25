@extends('layouts.master')
<script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"/>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
@section('content')

    <h1 class="text-red-600 font-bold text-3xl">{{$playlist->name}}</h1>


    @foreach($playlist->songs as $song)

        <a class="text-white" href="/songs/view/{{$song->id}}">- {{$song->name}}</a>
        <br>

    @endforeach


    <form action="/playlist/addsong/{{$playlist->id}}" method="POST">
        @csrf
        <select name="selectedSong" class="song-select-input">
            @foreach($songs as $song)
                <option value='{{$song->id}}'>{{$song->name}}</option>
            @endforeach
        </select>
        <br><br>

        <input
            class="text-green-400 hover:bg-amber-50 p-1 duration-200 hover:cursor-pointer hover:border-gray-700 hover:rounded-lg "
            type="submit" value="add song">

    </form>

@endsection
@push('footerStyle')

    fixed bottom-0

@endpush


<script>
    $(document).ready(function () {
        $('.song-select-input').select2();
    });

</script>
