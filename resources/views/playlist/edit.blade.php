@extends('layouts.master')


@section('content')

    <form action="/playlist/submitEdit/{{$playlist->id}}" method="POST">
        @csrf
        <label class="items-center text-orange-400 text-2xl" for="name">Edit je playlist:</label> <br> <br>
        <input class="text-gray-600 rounded-lg" type="text" name="name" placeholder="playlist naam...">
        @error('playlistName')
        <p>{{$message}}</p>
        @enderror
        <br><br>
        <input class="text-gray-600 rounded-lg" type="text" name="description"
               placeholder="playlist description...">

        <br><br>
        <input
            class="text-green-400 hover:bg-amber-50 p-1 duration-200 hover:cursor-pointer hover:border-gray-700 hover:rounded-lg "
            type="submit" value="Opslaan">
    </form>

@endsection
@push('footerStyle')

    fixed bottom-0

@endpush
