@extends('layouts.app')

@section('content')
<div class="container my-3">
    <h1>Comics</h1>
    <div class="row g-4">
        <div>
            <a class="btn btn-primary" href="fumetto/create">Aggiungi un nuovo prodotto</a>
        </div>
            <section class="bg_black">
                <div class="boxed boxedMain">
                    @foreach ($fumetti as $fumetto)
                    <div class="card">
                        <img src={{$fumetto->thumb}} alt="images">
                        <h4><a href="{{ route("fumetto.show", $fumetto->id) }}">{{$fumetto->title}}</a></h4>
                        <a class="btn btn-primary flex-end" href="{{ route("fumetto.edit", $fumetto->id) }}">Modifica</a>
                    </div>
                    @endforeach
                </div>
            </section>
    </div>

   

</div>
@endsection
