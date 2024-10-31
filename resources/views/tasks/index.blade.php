@extends('layouts.app')

@section('content')
    <style>
        body {
            background-color: #f4f6f9;
        }
        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }
        .table {
            background-color: #ffffff;
            border-radius: 8px;
            overflow: hidden;
        }
        th {
            background-color: #007bff;
            color: #fff;
            text-align: center;
        }
        td, th {
            padding: 12px;
            text-align: center;
            vertical-align: middle;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .btn-warning {
            background-color: #ffc107;
            border-color: #ffc107;
        }
        .btn-warning:hover {
            background-color: #e0a800;
        }
        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
        }
        .btn-danger:hover {
            background-color: #c82333;
        }
        .btn-secondary {
            background-color: #6c757d;
            border-color: #6c757d;
        }
        .btn-secondary:hover {
            background-color: #5a6268;
        }
        .modal-header, .modal-footer {
            background-color: #f8f9fa;
            border: none;
        }
        .modal-content {
            border-radius: 8px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }
    </style>

    <h1>To-Do List</h1>

    <div class="text-center mb-3">
        <a href="{{ route('tasks.create') }}" class="btn btn-primary">Add Task</a>
    </div>

    <div class="container">
        <table class="table table-striped table-hover shadow-sm">
            <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($tasks as $task)
                <tr>
                    <td>{{ $task->id }}</td>
                    <td>{{ $task->title }}</td>
                    <td>{{ $task->description }}</td>
                    <td>{{ $task->completed ? 'Completed' : 'Incomplete' }}</td>
                    <td>
                        <a href="{{ route('tasks.edit', $task) }}" class="btn btn-warning btn-sm">Edit</a>
                        <button type="submit" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#myModal" onclick="deleteFunc(this, '{{ route('tasks.destroy', $task->id) }}')">Delete</button>
                        <a href="{{ route('tasks.toggle', $task) }}" class="btn btn-secondary btn-sm">
                            {{ $task->completed ? 'Undo' : 'Complete' }}
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST" id="task_delete">
                @csrf
                @method('DELETE')

                <!-- Modal Header -->
                    <div class="modal-header">
                        <h5 class="modal-title" id="myModalLabel">Do you really want to delete this task?</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <!-- Modal Footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        let task_delete = document.getElementById('task_delete');

        function deleteFunc(delete_button, url) {
            task_delete.setAttribute('action', url);
        }
    </script>
@endsection
