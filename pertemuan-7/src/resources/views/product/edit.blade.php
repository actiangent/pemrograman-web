@extends('layouts.main')

@section('content')
    <form action="{{ route('product.update', $product) }}" method="POST">
        @csrf
        @method('patch')
        <div class="mb-3">
            <label>Name<span class="text-danger">*</span></label>
            <input class="form-control" type="text" name="name" value="{{ old('name', $product->name) }}" />
        </div>

        <div class="mb-3">
            <button class="btn btn-primary">Update Product</button>
            <a class="btn btn-danger" href="{{ route('product') }}">Back</a>
        </div>
    </form>
@endsection
