@extends('layouts.layout')
@section('content')
@section('title' , 'create')

<div class="container my-4">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card ">
                <form action="/pizza" method="POST" class="card-body">
                    @csrf
                    <div class="form-group">
                        <label for="">name</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="type">Choose type of pizza:</label>
                        <select name="type" id="type" class="form-control">
                            <option value="margarita">Margarita</option>
                            <option value="hawaiian">Hawaiian</option>
                            <option value="veg supreme">Veg Supreme</option>
                            <option value="volcano">Volcano</option>
                          </select>
                    </div>
                    <div class="form-group">
                        <label for="base">Choose crust:</label>
                        <select name="base" id="base" class="form-control">
                          <option value="thick">Thick</option>
                          <option value="thin & crispy">Thin & Crispy</option>
                          <option value="cheese crust">Cheese Crust</option>
                          <option value="garlic crust">Garlic Crust</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-block btn-primary">order</button>
                </form>
            </div>
        </div>
    </div>
</div>
    

    
@endsection