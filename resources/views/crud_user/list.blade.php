@extends('dashboard')

@section('content')
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>User List</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
                background-color: #f4f4f4;
            }

            .container {
                max-width: 800px;
                margin: 20px auto;
                padding: 20px;
                background-color: #fff;
                border-radius: 5px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }

            h1 {
                text-align: center;
            }

            table {
                width: 100%;
                border-collapse: collapse;
                margin-top: 20px;
            }

            th, td {
                padding: 10px;
                text-align: left;
                border-bottom: 1px solid #ddd;
            }

            th {
                background-color: #f2f2f2;
            }

            .add-btn {
                display: block;
                margin: 20px auto;
                padding: 10px 20px;
                background-color: #007bff;
                color: #fff;
                text-decoration: none;
                border-radius: 5px;
                text-align: center;
            }

            .add-btn:hover {
                background-color: #0056b3;
            }

            .edit-btn, .delete-btn, .view-btn {
                padding: 5px 10px;
                border: none;
                cursor: pointer;
                border-radius: 3px;
                color: #fff;
            }

            .edit-btn { background-color: #28a745; }
            .delete-btn { background-color: #dc3545; }
            .view-btn { background-color: #7e13ac; }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>User List</h1>
            <table>
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $key => $user)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <a href="{{ route('user.readUser', ['id' => $user->id]) }}" class="view-btn">View</a>
                                <a href="{{ route('user.updateUser', ['id' => $user->id]) }}" class="edit-btn">Edit</a>
                                <a href="{{ route('user.deleteUser', ['id' => $user->id]) }}" class="delete-btn" onclick="return confirm('Are you sure?')">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <script>
            document.addEventListener("DOMContentLoaded", function () {
                console.log("User List Page Loaded");
            });
        </script>
    </body>
    </html>
@endsection
