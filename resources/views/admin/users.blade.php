@extends('layouts.app')


@section('content')
    <div class="row container-fluid">

        <div class="col-lg-2  row p-4  d-flex justify-content-around align-items-center">
            <div id=" w-100" style="border: 1px solid rgba(85, 85, 4, 0.815)">
                <nav class="  navbar navbar-nav 1">

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

        <div class="col-lg-10 p-4 bg-white rounded">

            <div class="container">

                <table class="table align-middle mb-0 bg-white  my-5 border ">
                    <thead class="bg-light">
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th> Email</th>
                            <th>created_at</th>
                            <th>Options</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>
                                    <p class="fw-normal mb-1">{{ $user->firstname }}</p>
                                </td>
                                <td>
                                    <p class="fw-normal mb-1">{{ $user->lastname }}</p>

                                </td>
                                <td>
                                    <p class="fw-normal mb-1">{{ $user->email }}</p>
                                </td>
                                <td>
                                    <p class="fw-normal mb-1">{{ $user->created_at }}</p>
                                </td>

                                <td>

                                    <a href="" class="btn mx-2 ">Edit</a>
                                    <a href="" class="btn bg-primary mx-2 ">Ditales</a>
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
