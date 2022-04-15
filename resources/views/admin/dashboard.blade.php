@extends('layouts.app')


@section('content')
    <div class="row container-fluid">

        @if (session('pizza_add_success'))
        <div class="bg-success rounded-2 mb-4 p-3 text-white fs-5 text-center">
            {{ session('pizza_add_success') }}
        </div>
         @endif
        @if (session('pizza_update_success'))
        <div class="bg-success rounded-2 mb-4 p-3 text-white fs-5 text-center">
            {{ session('pizza_update_success') }}
        </div>
         @endif

         @if (session('pizza_delete_success'))
         <div class="bg-warning rounded-2 mb-4 p-3 text-black fs-5 text-center">
             {{ session('pizza_delete_success') }}
         </div>
          @endif
        <div class="col-lg-2  row p-4  d-flex justify-content-around align-items-center">
            <div id=" w-100" style="border: 1px solid rgba(85, 85, 4, 0.815)">
                <nav class="  navbar navbar-nav 1">

                    <a class="nav-link my-4 d-block w-100 text-center bg-danger" href="{{ route('admin.users') }}">
                        Users
                    </a>

                    <a class="nav-link my-4 d-block w-100 text-center bg-danger" href="{{ route('admin.orders') }}">
                        Orders
                    </a>
                    <a class="nav-link my-4 d-block w-100 text-center bg-danger" href="{{ route('dashboard') }}">
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
                                    <img src="{{ asset('images/' . $pizza->src) }}" class="w-50 h-25 d-block" alt="">


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

                                    <a href="{{ route('admin.update.pizza', $pizza) }}" class="btn mx-2 ">Edit</a>
                                    <form action="{{ route('admin.delete.pizza', $pizza) }}" method="POST"
                                        class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="btn bg-danger mx-2" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal">Delete</button>
                                        <div class="modal fade" id="exampleModal" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Delete a Pizza
                                                        </h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Are you sure to delete this pizza?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn bg-danger">Delete</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>

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
