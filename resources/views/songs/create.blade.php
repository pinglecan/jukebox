@extends("layouts.master")

@section("content")
    <form action="/songs/store" method="POST">
        @csrf
        <label class="items-center text-orange-400 text-2xl" for="name">vul hier de song naam in:</label> <br> <br>
        <input class="text-gray-600 rounded-lg" id="name" type="text" name="name" placeholder="song name...">

        @error("name")
        {{$message}}
        @enderror

        <br><br>
        <label class="items-center text-orange-400 text-2xl" for="duration">vul hier de duration in:</label> <br> <br>
        <input class="text-gray-600 rounded-lg" type="number" id="duration" name="duration"
               placeholder="song duration...">
        @error("duration")
        {{$message}}
        @enderror

        <br><br>
        <label class="items-center text-orange-400 text-2xl" for="genre_id">vul hier de genre in:</label> <br> <br>
        <input class="text-gray-600 rounded-lg" type="number" id="genre_id" name="genre_id" placeholder="genre...">
        @error("genre_id")
        {{$message}}
        @enderror
        <br><br>
        <input
            class="text-green-400 hover:bg-amber-50 p-1 duration-200 hover:cursor-pointer hover:border-gray-700 hover:rounded-lg "
            type="submit">
    </form>
@endsection
