@extends('dashboard')

@section('content')
    <main class="login-form">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                        <h3 class="card-header text-center bg-primary text-white">User Details</h3>
                        <div class="card-body">
                            <table class="table table-bordered table-striped">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ $messi->id }}</td>
                                        <td>{{ $messi->name }}</td>
                                        <td>{{ $messi->email }}</td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@push('styles')
    <style>
        .table th, .table td {
            text-align: center;
            vertical-align: middle;
        }

        .table {
            border-collapse: separate;
            border-spacing: 0 10px;
        }

        .card {
            border: none;
        }

        .card-header {
            font-size: 1.5rem;
        }

        .btn {
            padding: 10px 20px;
            text-decoration: none;
            margin-top: 10px;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }

        .card-body {
            background-color: #f8f9fa;
        }
    </style>
@endpush
