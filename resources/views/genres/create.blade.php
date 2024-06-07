@extends("layouts.master")

@section("content")
    <form action="/genres/store" method="POST">
        @csrf
        <label class="items-center" for="name">vul hier de genre naam in:</label> <br>
        <input class="" type="text" name="genreName">
        <br>
        <input type="submit">
    </form>
@endsection

