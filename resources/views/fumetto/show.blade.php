@extends('layouts.app')

@section('content')
<div class="container my-3">
    <h1>Dettagli: {{$fumetto->title}}</h1>
    <img src="{{$fumetto->thumb}}" alt="">
    <div class="row g-4">
        <div class="col">
            <a href="{{ route("home") }}">Torna ai fumetti</a>
        </div>
    </div>
</div>
@endsection