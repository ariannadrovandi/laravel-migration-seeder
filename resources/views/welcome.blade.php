@extends('layouts.app')

@section('maincontent')
<main>
    <h1 class="text-center">Treni</h1>
    @foreach ($trains as $train)
    <ul>
        <li>{{ $train->azienda }}</li>
        <li>{{ $train->stazione_partenza }}</li>
        <li>{{ $train->stazione_arrivo }}</li>
        <li>{{ $train->orario_partenza }}</li>
        <li>{{ $train->orario_arrivo }}</li>
        <li>{{ $train->codice }}</li>
        <li>{{ $train->vagoni }}</li>
        <li>{{ $train->in_orario }}</li>
        <li>{{ $train->cancellato }}</li>
    </ul>
    @endforeach
</main>
@endsection
