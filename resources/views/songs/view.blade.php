@extends('layouts.master')


@section('content')

    <h1 class="text-red-600 font-bold text-3xl" >{{$song->name}}</h1>
    <br>
    <h2 class="text-red-500 text-xl " >this song is made by: {{$song->artist}}</h2>
    <p>{{ gmdate("i:s", $song->duration) }}</p>
@endsection

@push('footerStyle')

    fixed bottom-0

@endpush
