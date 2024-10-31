@extends('layouts.app')

@section('content')
    <style>
        body {
            background: linear-gradient(135deg, #ece9e6, #ffffff);
            color: #333;
            font-family: Arial, sans-serif;
        }
        .container {
            margin-top: 50px;
        }
        .card {
            border: none;
            border-radius: 12px;
            box-shadow: 0px 20px 20px rgba(0, 0, 0, 0.15);
            overflow: hidden;
            padding: 20px;
        }
        .card-header {
            background: #00b894;
            color: #fff;
            font-weight: 500;
            text-align: center;
            padding: 1.2rem;
            font-size: 1.5rem;
        }
        .form-control {
            border-radius: 10px;
            padding: 0.75rem;
            font-size: 1rem;
        }
        .form-control:focus {
            box-shadow: 0 0 5px rgba(0, 184, 148, 0.5);
            border-color: #00b894;
        }
        .btn-success {
            background: #00b894;
            border: none;
            border-radius: 20px;
            padding: 0.5rem 1.5rem;
            font-weight: bold;
            font-size: 1rem;
            transition: background-color 0.3s;
        }
        .btn-success:hover {
            background: #009378;
        }
    </style>

    <div class="container d-flex justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Task</div>

                <div class="card-body">
                    <form action="{{ route('tasks.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title" required>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="4"></textarea>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-success">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
