@extends('layouts.app')


@section('content')
<div class="container ">
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

            <tr >
                <td>
                    <p class="fw-normal mb-1">{{ $pizza->name }}</p>
                </td>
                <td class="w-25  ">
                        <img src="{{ asset('images/'.$pizza->src )}}" class="w-50 h-25 d-block" alt="">


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

@endsection
