<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Create</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2>Add Task</h2>
                    <a class="btn btn-secondary" href="{{ url()->previous() }}">Back</a>
                </div>
            </div>
        </div>
        
        @if(session('status'))
        <div class="alert alert-success mb-4">
            {{ session('status') }}
        </div>
        @endif

        <form action="{{ url('taskstore') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12">
                    <div class="form-group mb-3">
                        <label for="task_name"><strong>Task Name:</strong></label>
                        <input type="text" id="name" name="name" class="form-control" placeholder="Enter task name" required>
                        @error('task_name')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-12">
                    <div class="form-group mb-3">
                        <label for="title"><strong>Title:</strong></label>
                        <input type="text" id="title" name="title" class="form-control" placeholder="Enter task title" required>
                        @error('title')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-12">
                    <div class="form-group mb-3">
                        <label for="description"><strong>Description:</strong></label>
                        <textarea id="description" name="description" class="form-control" placeholder="Enter task description" rows="4" required></textarea>
                        @error('description')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-12">
                    <div class="form-group mb-4">
                        <button type="submit" class="btn btn-primary w-100">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
