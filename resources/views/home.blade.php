@extends('layouts.app')


@section('content')
    <div class="d-flex container-fluid  justify-content-center mt-4 ">

        <div class="col-md-10 p-4 bg-white rounded ">
            <div id="main" class=" mt-5 carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @foreach ($pizzas as $pizza)
                        <div class="carousel-item  {{ $pizza['id'] == 12 ? 'active' : '' }}">
                            <a href=""> <img height="450px" src="{{ asset('images/'.$pizza->src) }}" class="d-block w-100"
                                    alt={{ $pizza->info }}></a>
                        </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#main" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#main" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden ">Next</span>
                </button>
            </div>

        </div>

    </div>
    <div class="container py-5 " id="">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="py-5 my-4 fw-bolder">Gallary</h1>
                <img src="images/1649868624gallery-img5.jpg" class="rounded-circle h-50" alt="" />
                <h2 class="my-5">Try Our Testy Pizza</h2>
                <p class="text-black-50 my-4">
                    we made it of the mose rich ingredents
                </p>
            </div>


            @foreach ($pizzas as $pizza)
                <a href="{{ route('pizza', $pizza) }}" class="d-block col-md-6 col-lg-4 col-sm-10 py-3">
                    <figure class="figure ">
                        <img src="{{ asset('images/'. $pizza->src) }}" class="figure-img img-fluid rounded" alt="{{ $pizza->description }}" />
                        <figcaption class="figure-caption text-center ">
                            <p class="fs-4 pizza-name m-0"> {{ $pizza->name }}</p>
                            <p class="fs-5 pizza-description text-black m-0"> {{ $pizza->description }}</p>
                            <p class="fs-6 pizza-price text-start m-0"> {{ $pizza->price }}</p>
                        </figcaption>
                    </figure>
                </a>
            @endforeach


        </div>
    </div>
@endsection
