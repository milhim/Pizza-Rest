@extends('layouts.app')


@section('content')
    <section class="intro ">
        <div class="bg-image-vertical h-100" style="background-color: #EFD3E4;
                                        background-image: url('{{ asset('images/gallery-img5.jpg') }}');">
            <div class="mask d-flex align-items-center h-100">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-10 ">
                            <div class="card" style="border-radius: 1rem;">
                                <div class="card-body  p-5">

                                    <h1 class="mb-2 text-center">Update Order</h1>
                                    @if (session('order_update_success'))
                                        <div class="bg-success rounded-2 mb-4 p-3 text-white fs-5 text-center">
                                            {{ session('order_update_success') }}
                                        </div>
                                    @endif
                                    <form action="{{ route('admin.order.update', ['user' => $order->user_id, 'order' => $order]) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <!-- 2 column grid layout with text inputs for the first and last names -->
                                        <div class="row">
                                            <div class="col-12 col-md-6 mb-2">
                                                <div class="form-outline">
                                                    <input value="{{ $order->user_first_name }}" type="text"
                                                        name="user_first_name" id="user_first_name"
                                                        class="form-control" />
                                                    <label class="form-label" for="user_first_name">First
                                                        name</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 mb-2">
                                                <div class="form-outline">
                                                    <input value="{{ $order->user_last_name }}" type="text"
                                                        name="user_last_name" id="user_last_name" class="form-control" />
                                                    <label class="form-label" for="user_last_name">Last
                                                        name</label>
                                                </div>
                                            </div>
                                        </div>


                                        <!-- Text input -->

                                        <div class="form-outline mb-2">
                                            <input value="{{ $order->billing_email }}" type="text" name="billing_email"
                                                id="billing_email" class="form-control" />
                                            <label class="form-label" for="billing_email">Email</label>
                                        </div>

                                        <!-- Email input -->
                                        <div class="form-outline mb-2">
                                            <input value="{{ $order->billing_address }}" type="text"
                                                name="billing_address" id="billing_address" class="form-control" />
                                            <label class="form-label" for="billing_address">Address</label>
                                        </div>

                                        <!-- Number input -->
                                        <div class="form-outline mb-2">
                                            <input value="{{ $order->phone }}" type="text" name="phone" id="phone"
                                                class="form-control" />
                                            <label class="form-label" for="phone">Phone</label>
                                        </div>




                                        <!-- Submit button -->
                                        <button type="submit" class="btn ">Update Order</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
