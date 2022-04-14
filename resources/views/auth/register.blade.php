@extends('layouts.app')


@section('content')
    <div class="d-flex row  justify-content-center">

        <div class="col-lg-4 p-4 bg-white rounded">



            <form action="{{ route('register') }}" method="POST">
                @csrf

                <div class="mb-4">
                    <label for="firstname" class="">First Name</label>
                    <input type="text" name="firstname" id="firstname" placeholder="Your first name"
                        class="  form-control border-2 w-100 p-2 rounded @error('firstname') border-danger @enderror" value="{{old('name')}}">
                    @error('firstname')
                        <div class="text-danger mt-2 text-sm">
                            {{ $message }}

                        </div>
                    @enderror
                </div>



                <div class="mb-4">
                    <label for="lastname" class="sr-only">Last Name</label>
                    <input type="text" name="lastname" id="lastname" placeholder="Your last name"
                        class=" form-control border-2 w-100 p-2 rounded @error('lastname') border-danger @enderror" value="{{old('username')}}">

                    @error('lastname')
                        <div class="text-danger mt-2 text-sm">
                            {{ $message }}

                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="email" class="sr-only">Email</label>
                    <input type="text" name="email" id="email" placeholder="Your email"
                        class=" form-control border-2 w-100 p-2 rounded @error('name') border-danger @enderror" value="{{old('email')}}">

                    @error('email')
                        <div class="text-danger mt-2 text-sm">
                            {{ $message }}

                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" id="password" placeholder="Choose a password"
                        class=" form-control  border-2 w-100 p-2 rounded @error('password') border-danger @enderror" value="">

                    @error('password')
                        <div class="text-danger mt-2 text-sm">
                            {{ $message }}

                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password_confirmation" class="sr-only">Password again</label>
                    <input type="password" name="password_confirmation" id="password_confirmation"
                        placeholder="Repeat your password" class=" form-control border-2 w-100 p-2 rounded" value="">
                </div>

                <div>
                    <button type="submit" class="btn btn-primary px-3 py-2 fs-5 w-100">Register</button>
                </div>
            </form>
        </div>

    </div>
@endsection
