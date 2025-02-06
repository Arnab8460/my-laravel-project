@extends('layout')

@section('content')
<div class="container">
    <h1 class="mb-4 text-center">Task List</h1>
    <div class="mb-4">
        <a href="{{ url('create') }}" class="btn btn-success btn-lg w-100">Add New Task</a>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th>Task Name</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($taskdetails as $task)
                        <tr>
                            <td>{{ $task->name }}</td>
                            <td>{{ $task->title }}</td>
                            <td>{{ $task->description }}</td>
                            <td>
                            <a href="{{ url('edit/'.$task->id) }}" class="btn btn-warning btn-sm mb-2">Edit</a>
                                <form action="{{ url('delete/'.$task->id) }}" method="POST" style="display:inline;" onsubmit="return confirmDelete()">
                                @csrf
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<style>
    th, td {
        text-align: center;
        vertical-align: middle;
    }

    .btn-sm {
        padding: 5px 10px;
    }

    .table-responsive {
        max-width: 100%;
        overflow-x: auto;
    }

    .thead-dark th {
        background-color: #007bff;
        color: white;
        font-size: 1.1rem;
        text-transform: uppercase;
    }

    tbody tr:hover {
        background-color: #f1f1f1;
    }
</style>
<script>
    function confirmDelete() {
        return confirm("Are you sure you want to delete this task?");
    }
</script>
@endsection
