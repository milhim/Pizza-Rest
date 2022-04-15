
@extends('layouts.app')


@section('content')

<div class="d-flex row  justify-content-center">

    <div class="col-lg-8 p-4 bg-white rounded">
        <h1 class=" text-center py-2 my-3">{{$pizza->name}}</h1>
        <p class=" text-center fs-3 pizza-price py-2 my-2">{{$pizza->info}}</p>
        <p class=" text-center fs-4 pizza-price py-2 my-2">{{$pizza->price}}</p>

        <img src="{{asset('images/'.$pizza->src)}}" alt="{{$pizza->info}}">

        <a href="{{route('pizza.order',$pizza)}}" class="btn w-25 p-4 my-2 items-center">Order Now</a>

    </div>

</div>

@endsection
