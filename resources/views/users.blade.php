@extends('app')
@section('content')
    <h1>Users</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>

            @forelse ($dataSet as $key => $user)
                <tr>
                    <th scope="row">{{ ++$key }}</th>
                    <td>{{  $user->name }}</td>
                    <td> $user->email }}</td>
                    <td>Action</td>
                </tr>
            @empty
                No user found
            @endforelse

        </tbody>
    </table>
@endsection
