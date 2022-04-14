
@extends('layouts.app')


@section('content')

<div class="d-flex row  justify-content-center">

    <div class="col-lg-8 p-4 bg-white rounded">
        <h1>{{$pizza->name}}</h1>
        <img src="{{asset($pizza->src)}}" alt="">
        <a href="{{route('pizza.order',$pizza)}}" class="btn">Order Now</a>
    </div>

</div>

@endsection
