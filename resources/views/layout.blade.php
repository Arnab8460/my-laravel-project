<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body { 
            font-family: Arial, sans-serif; 
            margin: 0; 
            padding: 0;
            background-color: #f8f9fa;
        }

        .navbar {
            background-color: #007bff;
        }

        .navbar-brand {
            color: white;
        }

        .navbar-nav .nav-link {
            color: white !important;
        }

        .navbar-nav .nav-link:hover {
            background-color: #0056b3;
        }

        .container {
            max-width: 900px;
            margin-top: 40px;
        }

        h1 {
            font-size: 2rem;
            color: #333;
        }

        .card {
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            padding: 15px;
        }

        .table {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        th, td {
            text-align: center;
            vertical-align: middle;
        }

        .table-responsive {
            margin-top: 20px;
        }

        .btn {
            transition: all 0.3s ease;
        }

        .btn:hover {
            opacity: 0.8;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="#">Task Management</a>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('/taskdisplay') }}">Home</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container">
    @yield('content')
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
