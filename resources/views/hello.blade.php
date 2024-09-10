@extends("layouts.master")

@section("content")

    <h1 class="text-3xl text-red-600"> hallo {{Auth::user()->name ?? 'gebruiker'}}! welkom op mijn silly pagina</h1>
    <br><br>
    <p> welkom op de meest silly pagina van het hele internet.</p>

@endsection

@push('footerStyle')

    fixed bottom-0

@endpush

