@extends('layouts.app')


@section('content')
    <div class="row container-fluid">

        <div class="col-lg-2  row  d-flex justify-content-around align-items-center">
            <div  class="" style="border: 1px solid rgba(85, 85, 4, 0.815)">
                <nav class="  navbar navbar-nav ">

                    <a class="nav-link my-4 " href="{{ route('admin.users') }}">
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

                                    <a href="" class="btn mx-2 ">Edit</a>
                                    <a href="{{ route('users.profile.orders.details', ['user' => auth()->user(), 'order' => $order]) }}" class="btn bg-primary mx-2 ">Ditales</a>
                                    <form class="d-inline" action="" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn bg-danger mx-2">Delete</button>
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
