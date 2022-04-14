@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="d-flex row  justify-content-center card ">
            <div class="card-header ">
                <h1 class="pizza-name">Add New Pizza</h1>
            </div>
            <div class="col-lg-8 offset-2 p-4 bg-white rounded card-body ">
                <form  method="post" action="{{ route('admin.add.pizza') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-outline mb-2">
                        <input type="text" name="name" id="name" class="form-control" />
                        <label class="form-label" for="name">Name</label>
                    </div>

                    <div class="image">
                        <input type="file" class="form-control" id="src" name="src">
                        <label class="form-label" for="src">Gallery</label>
                    </div>

                    <div class="form-outline mb-2">
                        <input type="text" name="info" id="info" class="form-control" />
                        <label class="form-label" for="info">Description</label>
                    </div>

                    <div class="form-outline mb-2">
                        <input type="text" name="size" id="size" class="form-control" />
                        <label class="form-label" for="size">Size</label>
                    </div>


                    <div class="form-outline mb-2">
                        <input type="text" name="price" id="price" class="form-control" />
                        <label class="form-label" for="price">Price</label>
                    </div>


                    <div class="">
                        <button type="submit" class="btn bg-success">Add</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection
