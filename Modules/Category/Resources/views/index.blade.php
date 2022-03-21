@extends('category::layouts.master')

@section('content')
    <h1>Hello Category Module</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($categories as $key => $node)
                <tr>
                    <th scope="row">1</th>
                    <td>{{ $node->title }}</td>
                    <td>{{ $node->description }}</td>
                    <td>
                        <button class="btn btn-success">Edit</button>
                        <button class="btn btn-danger">Delete</button>
                    </td>
                </tr>
            @empty
                <p>No catgory found</p>
            @endforelse
        </tbody>
    </table>
@endsection
