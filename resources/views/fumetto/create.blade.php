@extends('layouts.app')

@section('content')

<div class="container my-3">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <h1>Create Fumetto</h1>
    <div class="row g-4 py-4">
        <div class="col">
            <form action="{{ route('fumetto.store') }}" method="post" class="needs-validation">
                @csrf
            
                <label for="name">title</label>
                <input class="form-control @error('title') is-invalid @enderror" type="text" name="title" value="{{old('title')}}">
                @error("title")
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror

                <label for="name">description</label>
                <input class="form-control @error('description') is-invalid @enderror" type="text" name="description" value="{{old('description')}}">
                @error("description")
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror

                <label for="name">thumb</label>
                <input class="form-control @error('thumb') is-invalid @enderror" type="text" name="thumb" value="{{old('thumb')}}">
                @error("thumb")
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror

                <label for="name">price</label>
                <input class="form-control @error('price') is-invalid @enderror" type="text" name="price" value="{{old('price')}}">
                @error("price")
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror

                <label for="name">series</label>
                <input class="form-control @error('series') is-invalid @enderror" type="text" name="series" value="{{old('series')}}">
                @error("series")
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror

                <label for="name">sale_date</label>
                <input class="form-control @error('sale_date') is-invalid @enderror" type="text" name="sale_date" value="{{old('sale_date')}}">
                @error("sale_date")
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror

                <label for="name">type</label>
                <input class="form-control @error('type') is-invalid @enderror" type="text" name="type" value="{{old('type')}}">
                @error("type")
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror

                <input class="form-control mt-4 btn btn-primary" type="submit" value="Invia">
             </form>
        </div>
    </div>

</div>
@endsection