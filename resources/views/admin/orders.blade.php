@extends('layouts.app')


@section('content')
    <div class="row container-fluid">
        @if (session('order_delete_success'))
        <div class="bg-danger rounded-2 mb-4 p-3 text-white fs-5 text-center">
            {{ session('order_delete_success') }}
        </div>
         @endif
        <div class="col-lg-2  row p-4 d-flex justify-content-around align-items-center">
            
            <div  class="" style="border: 1px solid rgba(85, 85, 4, 0.815)">
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

        <div class="col-lg-10  bg-white rounded">

            <div class="container">

                <table class="table align-middle mb-0 bg-white  my-5 border ">
                    <thead class="bg-light">
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Billing Email</th>
                            <th>Billing Address</th>
                            <th>Phone</th>
                            <th>Options</th>


                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                            <tr>
                                <td>
                                    <p class="fw-normal mb-1">{{ $order->user_first_name }}</p>
                                </td>
                                <td>
                                    <p class="fw-normal mb-1">{{ $order->user_last_name }}</p>

                                </td>
                                <td>
                                    <p class="fw-normal mb-1">{{ $order->billing_email }}</p>
                                </td>
                                <td>
                                    <p class="fw-normal mb-1">{{ $order->billing_address }}</p>
                                </td>
                                <td>
                                    <p class="fw-normal mb-1">{{ $order->phone }}</p>
                                </td>
                                <td>

                                    <a href="{{route('admin.order.update', ['user'=>$order->user_id,'order' => $order]) }}" class="btn mx-2 ">Edit</a>
                                    <a href="{{ route('admin.order.details', ['user'=>$order->user_id,'order' => $order]) }}" class="btn bg-primary mx-2 ">Ditales</a>
                                    <form class="d-inline" action="{{ route('admin.order.delete', ['user'=>$order->user_id,'order' => $order]) }}" method="POST">
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
        </div>
    </div>
@endsection
