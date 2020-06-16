@extends('layouts.app')

@section('content')
<div class="card bg-light mb-3" style="width: 64rem;">
  
  
@foreach($performances as $performance)
<div class="jumbotron">
  <h1 class="display-5">{{$performance->title}}</h1>
  <hr class="my-4">
  <p class="lead">{{$performance->description}}</p>
  <hr class="my-4">
  <p>Ticket price: ${{$performance->ticket_price}}</p>
</div>
@endforeach

@endsection