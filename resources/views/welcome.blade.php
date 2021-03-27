@extends('layouts.layout')
@section('title' , 'page')
    

@section('content')
   <div class="container mt-5">
    <div class="jumbotron">
        <h1 class="display-4 text-uppercase text-center">Welcome To pizza house !</h1>
        <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
        <hr class="my-4">
        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
        <a class="btn btn-primary btn-lg" href="/pizza" role="button">see pizza list</a>
        <a class="btn btn-success btn-lg" href="/pizza/create" role="button">order pizza</a>
      </div>
   </div>
@endsection