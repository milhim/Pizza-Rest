@extends('layouts.app')


@section('content')
    <div class="d-flex row  justify-content-center back-ground-dark">

        <div class="col-lg-8 p-4  rounded">
            <div class="container-xl px-4 mt-4">
                <!-- Account page navigation-->

                <div class="row ">

                    <div class="col">
                        <!-- Account details card-->
                        <div class="card mb-4">
                            <div class="card-header">Account Details</div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('users.profile.edit', auth()->user()) }}"
                                    enctype="multipart/form-data">

                                    @csrf
                                    @method('PUT')

                                    <!-- Form Row-->
                                    <div class="row gx-3 mb-3">
                                        <!-- Form Group (first name)-->
                                        <div class="col-md-6">
                                            <label class="small mb-1" for="inputFirstName">First Name</label>
                                            <input name="firstname" class="form-control @error('firstname') border-danger @enderror" id="inputFirstName" type="text"
                                                placeholder="Enter your first name" value="{{ $user->firstname }}">
                                            @error('firstname')
                                                <div class="text-danger mt-2 text-sm">
                                                    {{ $message }}

                                                </div>
                                            @enderror
                                        </div>
                                        <!-- Form Group (last name)-->
                                        <div class="col-md-6">
                                            <label class="small mb-1" for="inputLastName">Last Name</label>
                                            <input name="lastname" class="form-control @error('lastname') border-danger @enderror" id="inputLastName" type="text"
                                                placeholder="Enter your last name" value="{{ $user->lastname }}">
                                            @error('lastname')
                                                <div class="text-danger mt-2 text-sm">
                                                    {{ $message }}

                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- Form Row        -->

                                    <!-- Form Group (email address)-->
                                    <div class="mb-3">
                                        <label class="small mb-1" for="inputEmailAddress">Email address</label>
                                        <input name="email" class="form-control @error('email') border-danger @enderror" id="inputEmailAddress" type="email"
                                            placeholder="Enter your email address" value="{{ $user->email }}">
                                        @error('email')
                                            <div class="text-danger mt-2 text-sm">
                                                {{ $message }}

                                            </div>
                                        @enderror
                                    </div>


                                    <!-- Form Row-->
                                    <div class="row gx-3 mb-3">
                                        <!-- Form Group (first name)-->
                                        <div class="col-md-6">
                                            <label class="small mb-1" for="password">Password</label>
                                            <input name="password" class="form-control @error('password') border-danger @enderror" id="password" type="password"
                                                placeholder="Enter your password" value="">
                                                @error('password')
                                                <div class="text-danger mt-2 text-sm">
                                                    {{ $message }}

                                                </div>
                                            @enderror
                                            </div>
                                        <!-- Form Group (last name)-->
                                        <div class="col-md-6">
                                            <label class="small mb-1" for="password_confirmation">Confirm
                                                Password</label>
                                            <input name="password_confirmation" class="form-control"
                                                id="password_confirmation" type="password"
                                                placeholder="Re-Enter your password" value="">
                                        </div>
                                    </div>
                                    <!-- Save changes button-->
                                    <input class="btn " type="submit" value="Save changes">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
