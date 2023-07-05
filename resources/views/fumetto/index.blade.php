@extends('layouts.app')

@section('content')
<div class="container my-3">
    <h1>Welcome Page</h1>
    <div class="row g-4">
        <div class="col">
            <div>
                <a class="btn btn-primary" href="fumetto/create">Aggiungi un nuovo prodotto</a>
            </div>
            @foreach ($fumetti as $fumetto)
                 <h1><a href="{{ route("fumetto.show", $fumetto->id) }}">{{$fumetto->title}}</a></h1>
            @endforeach
        </div>
    </div>

</div>
@endsection