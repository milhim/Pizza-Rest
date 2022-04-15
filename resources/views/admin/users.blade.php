@extends('layouts.app')


@section('content')
    <div class="row container-fluid">
        @if (session('user_deleted_success'))
        <div class="bg-warning rounded-2 mb-4 p-3 text-black fs-5 text-center">
            {{ session('user_deleted_success') }}
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

                                    <a href="{{ route('admin.update.user', $user) }}" class="btn mx-2 ">Edit</a>
                                    <a href="{{route('admin.user',$user)}}" class="btn bg-primary mx-2 ">Ditales</a>
                                    <form class="d-inline" action="{{route('admin.delete.user',$user)}}" method="POST">
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
