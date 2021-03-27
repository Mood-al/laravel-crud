@extends('layouts.layout')

@section('content')
    <div class="container my-4 ">
        <div class="card">
          <div class="card-body d-flex justify-content-between">
            <h4>
              {{ $pizzas->base }}
            </h4>
            <form action="/pizza/{{$pizzas->id}}" method="POST">
              @csrf
              @method('DELETE')
              <button class="btn btn-danger">
                delete
              </button>
            </form>
          </div>
        </div>
    </div>
@endsection