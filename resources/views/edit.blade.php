@extends('layout')

@section('content')
<div class="container">
    <h1 class="mb-4 text-center">Edit Task</h1>
    <div class="card">
        <div class="card-body">
            <form action="{{url('update',$taskedit->id)}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Task Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $taskedit->name }}" required>
                </div>

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $taskedit->title }}" required>
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="4" required>{{ $taskedit->description }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-lg w-100">Update Task</button>
            </form>
        </div>
    </div>
</div>
<style>
    .card {
        border-radius: 8px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        margin-top: 20px;
        padding: 20px;
    }

    .form-control {
        border-radius: 5px;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
    }

    .btn-lg {
        padding: 10px 15px;
        font-size: 1.1rem;
    }
</style>
@endsection
