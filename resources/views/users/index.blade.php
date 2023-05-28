@extends('layouts.main')

@section('content')
    <h1 class="mt-4">User Data</h1>
    <div class="d-flex justify-content-between mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
            <li class="breadcrumb-item active">Users</li>
        </ol>
        <a href="#">
            <button class="btn btn-success" type="submit">Create Data</button>
        </a>
    </div>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            User Data
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td> {{ $user['no'] }} </td>
                            <td> {{ $user['name'] }} </td>
                            <td> {{ $user['user'] }} </td>
                            <td> {{ $user['pass'] }} </td>
                            <td> {{ $user['email'] }} </td>
                            <td> {{ $user['role'] }} </td>
                            <td>
                                <a href="" class="btn btn-sm btn-warning"> Edit</a>
                                <a href="" class="btn btn-sm btn-danger"
                                    onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
