@extends("layouts.master")


@section("content")

    <h1 class="text-white text-4xl mb-20">Fucking coole sesion pagina</h1>
    <a class="text-white" href="{{route('session.add')}}"> add to sesion </a>
    <br>
    <a class="text-white" href="{{route("session.remove")}}"> remove from session </a>

    <br><br>

    <p class="text-white">{{var_dump(session('name'))}}</p>
@endsection


@push('footerStyle')

    fixed bottom-0

@endpush
