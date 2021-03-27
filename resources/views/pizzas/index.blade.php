@extends('layouts.layout')

@section('content')
    <div class="my-4">
        <h4 class="text-center">
            welcome home
        </h4>
        @foreach ($pizzas as $pizza)
            <div class="container">
                <a href="/pizza/{{$pizza->id}}" class="card mb-2">
                    <div class="card-body">
                        <h6>
                            {{$pizza->base}} - {{$pizza->type}}
                        </h6>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
@endsection