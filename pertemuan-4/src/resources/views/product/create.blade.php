@extends('layouts.main')

@section('content')
    <form action="{{ route('create.action') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Name<span class="text-danger">*</span></label>
            <input class="form-control" type="text" name="name" value="{{ old('name') }}" />
        </div>

        <div class="mb-3">
            <button class="btn btn-primary">Add Product</button>
            <a class="btn btn-danger" href="{{ route('products') }}">Back</a>
        </div>
    </form>
@endsection
