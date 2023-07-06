@extends('layouts.app')

@section('content')

<div class="d-flex p-4">
    <div class="row g-4">
        <div class="col">
            <a class="btn btn-primary ms-3" href="{{ route("home") }}">Torna ai fumetti</a>
        </div>
    </div>
    <form action="{{route("fumetto.destroy", $fumetto)}}" method="POST">
        @csrf
        @method('DELETE')
        <button id="remove" class="btn btn-primary ms-3" >Rimuovi</button>
    </form>
</div>

<div class="container my-3 show_img">
    <h1>Dettagli: {{$fumetto->title}}</h1>
    <img src="{{$fumetto->thumb}}" alt="">
</div>

<script>
    let btn_remove = document.getElementById('remove')
  
    btn_remove.addEventListener('click', function(){
      let conferma = confirm('Sicuro di voler cancellare?')
      if(conferma == true){
        document.getElementById('remove').submit()
      }else{
        event.preventDefault();
      }
      })
</script>
@endsection