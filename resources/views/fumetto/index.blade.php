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
            <div class="d-flex align-items-center">
                <h1><a href="{{ route("fumetto.show", $fumetto->id) }}">{{$fumetto->title}}</a></h1>
                <a class="btn btn-primary ms-3" href="{{ route("fumetto.edit", $fumetto->id) }}">Modifica</a>
                <form action="{{route("fumetto.destroy", $fumetto)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-primary ms-3">Rimuovi</button>
                </form>
            </div>
            @endforeach
        </div>
    </div>

</div>
@endsection