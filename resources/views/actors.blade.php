@extends('layouts.app')

@section('content')
<div class="card bg-light mb-1" style="width: 42rem;">
  
  
@foreach($actors as $actor)
<div class="jumbotron">
  <h1 class="display-5">{{$actor->name}} {{$actor->surname}}</h1>
  <hr class="my-4">
  <p class="lead">"{{$actor->favourite_saying}}"</p>
</div>
@endforeach

@endsection

