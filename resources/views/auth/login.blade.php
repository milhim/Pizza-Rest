@extends('layouts.app')


@section('content')
    <div class="d-flex row  justify-content-center">

        <div class="col-lg-4 p-4 bg-white rounded">

            @if (session('status'))
                <div class="bg-danger rounded-2 mb-4 p-3 text-white fs-5 text-center">
                    {{ session('status') }}
                </div>
            @endif


            <form action="{{ route('login') }}" method="POST">
                @csrf



                <div class="mb-4">
                    <label for="email" class="sr-only">Email</label>
                    <input type="text" name="email" id="email" placeholder="Your email"
                        class=" form-control border-2 w-100 p-2 rounded @error('email') border-danger @enderror"
                        value="{{ old('email') }}">

                    @error('email')
                        <div class="text-danger mt-2 text-sm">
                            {{ $message }}

                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" id="password" placeholder="Choose a password"
                        class=" form-control  border-2 w-100 p-2 rounded @error('password') border-danger @enderror"
                        value="">

                    @error('password')
                        <div class="text-danger mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <input type="checkbox" name="remember" id="remember" class="mr-2">
                    <label for="remember">Remember me</label>
                </div>

                <div>
                    <button type="submit" class="btn btn-primary px-3 py-2 fs-5 w-100">Login</button>
                </div>
            </form>
        </div>

    </div>
@endsection
