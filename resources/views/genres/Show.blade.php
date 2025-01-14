@extends('layouts.master')

@section('content')

    <h1 class="text-red-600 font-bold text-3xl">all songs that are in the {{$genre->name}} genre</h1>
        <ul>
            @foreach($genre->songs as $song)
                <br>
                <li><a class="text-green-400 mt-10" href="{{route('songs.view',$song)}}">{{$song->name}}</a></li>

            @endforeach
        </ul>



@endsection

@push('footerStyle')

    fixed bottom-0

@endpush
