@extends('layouts.main')

@section('content')
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
        </thead>
        <tbody>
            @foreach ($products as $p)
                <tr>
                    <th scope="row">{{ $loop->index }}</th>
                    <td>{{ $p->name }}</td>
                    <td>
                        <form action="{{ route('delete.action', ['product' => $p->id]) }}" method="post">
                            @csrf
                            @method('delete')
                            <div class="mb-3">
                                <button class="btn btn-danger">Delete</button>
                            </div>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
