@extends('layouts.app')

@section('content')
<div class="container my-3">
    <h1>Welcome Page</h1>
    <div class="row g-4">
        <div class="col">
            @foreach ($fumetti as $fumetto)
                 <h1><a href="">{{$fumetto->title}}</a></h1>
            @endforeach
        </div>
    </div>

</div>
@endsection