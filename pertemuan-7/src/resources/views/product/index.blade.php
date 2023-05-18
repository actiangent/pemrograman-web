@extends('layouts.main')

@section('content')
    <table class="table table-striped">
        <button onclick="window.location='{{ route('product.store') }}'" class="btn btn-primary">Add Product</button>
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($product as $p)
                <tr>
                    <th scope="row">{{ $loop->index }}</th>
                    <td>{{ $p->name }}</td>
                    <td>
                        <a href="product/{{ $p->id }}/edit" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                        <form action="{{ route('product.destroy', $p->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <div>
                                <button onclick="return confirm('Are you sure ?')" type="submit" class="btn btn-danger""><i
                                        class="fa fa-trash"></i></button>
                            </div>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
