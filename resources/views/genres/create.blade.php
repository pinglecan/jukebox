@extends("layouts.master")

@section("content")


    <form action="/genres/store" method="POST">
        @csrf
        <label class="items-center text-orange-400 text-2xl" for="name">vul hier de genre naam in:</label> <br> <br>
        <input class="text-gray-600 rounded-lg" type="text" name="genreName" placeholder="Genre name...">
        @error('genreName')
        <p>{{$message}}</p>
        @enderror
        <br><br>
        <input
            class="text-green-400 hover:bg-amber-50 p-1 duration-200 hover:cursor-pointer hover:border-gray-700 hover:rounded-lg "
            type="submit">
    </form>
@endsection

@push('footerStyle')

    fixed bottom-0

@endpush

