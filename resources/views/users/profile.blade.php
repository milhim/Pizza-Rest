@extends('layouts.app')


@section('content')
    <div class="d-flex row  justify-content-center back-ground-dark">

        <div class="col-lg-8  p-4 bg-white rounded my-5 card">
            <div class="row card-header">
                <div class="col">
                    <nav aria-label="breadcrumb" class="bg-light rounded-3  mb-2">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item nav-link"><a class="nav-link p-0" href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item nav-link" aria-current="page">My Profile</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <section class="card-body ">
                <div class="container ">


                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card mb-4">
                                <div class="card-body text-center">
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp"
                                        alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                                    <h5 class="my-3">{{$user->firstname. " ".$user->lastname}}</h5>
                                    <p class="text-muted mb-1"> Since {{$user->created_at->diffForHumans()}} </p>
                                    <a class="btn mt-2" href="{{route('users.profile.orders',auth()->user())}}">Orders</a>


                                </div>
                            </div>

                        </div>
                        <div class="col-lg-8">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">First Name</p>
                                        </div>
                                        <div class="col-sm-6 ms-auto">
                                            <p class="text-muted mb-0">{{$user->firstname}}</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Last Name</p>
                                        </div>
                                        <div class="col-sm-6 ms-auto">
                                            <p class="text-muted mb-0">{{$user->lastname}}</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row d-flex">
                                        <div class="col-sm-3 ">
                                            <p class="mb-0">Email</p>
                                        </div>
                                        <div class="col-sm-6 ms-auto">
                                            <p class="text-muted mb-0 ">{{$user->email}}</p>
                                        </div>
                                    </div>


                                    <hr>

                                    <div class="d-flex justify-content-center  mt-2">
                                        <a class="btn" href="{{route('users.profile.edit',auth()->user())}}">Edit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

    </div>
@endsection
