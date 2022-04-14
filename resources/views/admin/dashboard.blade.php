@extends('layouts.app')


@section('content')
    <div class="row container-fluid">

        <div class="col-lg-2  row p-4  d-flex justify-content-around align-items-center">
            <div id=" w-100" style="border: 1px solid rgba(85, 85, 4, 0.815)">
                <nav class="  navbar navbar-nav 1">

                    <a class="nav-link my-4 d-block"  href="{{ route('admin.users') }}">
                        Users
                    </a>

                    <a class="nav-link my-4" href="{{ route('admin.orders') }}">
                        Orders
                    </a>
                    <a class="nav-link my-4" href="{{ route('dashboard') }}">
                        Pizza
                    </a>




                </nav>
            </div>
        </div>

        <div class="col-lg-10 p-4 bg-white rounded">

            <div class="container">

                <table class="table align-middle mb-0 bg-white  my-5 border ">
                    <thead class="bg-light">
                        <tr>
                            <th>Pizza Name</th>
                            <th>Gallery</th>
                            <th>Description</th>
                            <th>Siza</th>
                            <th>Price</th>
                            <th>Options</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pizzas as $pizza)
                            <tr>
                                <td>
                                    <p class="fw-normal mb-1">{{ $pizza->name }}</p>
                                </td>
                                <td class="w-25  ">
                                    <img src="{{ asset('images/'.$pizza->src) }}" class="w-50 h-25 d-block" alt="">


                                </td>
                                <td>
                                    <p class="fw-normal mb-1">{{ $pizza->info }}</p>
                                </td>
                                <td>
                                    <p class="fw-normal mb-1">{{ $pizza->size }}</p>
                                </td>
                                <td>
                                    <p class="fw-normal mb-1">{{ $pizza->price }}</p>
                                </td>
                                <td>

                                    <a href="" class="btn mx-2 ">Edit</a>
                                    <a href="" class="btn bg-danger mx-2">Delete</a>

                                </td>
                            </tr>
                        @endforeach


                    </tbody>
                </table>

            </div>
            <a href="{{ route('admin.add.pizza') }} " class="btn mx-2 d-block bg-success">Add</a>

        </div>

    </div>

@endsection
