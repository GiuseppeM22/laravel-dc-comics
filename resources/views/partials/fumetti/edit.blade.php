@extends('layouts.app')

@section('content')
<div class="container my-3">
    <h1>Create Fumetto</h1>
    <div class="row g-4 py-4">
        <div class="col">
            <form action="{{ route('fumetto.update', $fumetto) }}" method="post">
                @csrf
                @method ('PUT')
            
                <label for="name">title</label>
                <input class="form-control" type="text" name="title" value="{{$fumetto->title}}">

                <label for="name">description</label>
                <input class="form-control" type="text" name="description" value="{{$fumetto->description}}">

                <label for="name">thumb</label>
                <input class="form-control" type="text" name="thumb" value="{{$fumetto->thumb}}">

                <label for="name">price</label>
                <input class="form-control" type="text" name="price" value="{{$fumetto->price}}">

                <label for="name">series</label>
                <input class="form-control" type="text" name="series" value="{{$fumetto->series}}">

                <label for="name">sale_date</label>
                <input class="form-control" type="text" name="sale_date" value="{{$fumetto->sale_date}}">

                <label for="name">type</label>
                <input class="form-control" type="text" name="type" value="{{$fumetto->type}}">

                <input class="form-control mt-4 btn btn-primary" type="submit" value="Invia">
             </form>
        </div>
    </div>

</div>
@endsection