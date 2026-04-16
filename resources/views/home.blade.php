<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Portal - Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5 text-center">
        <div class="p-5 bg-white rounded-3 shadow-sm border">
            <h1 class="display-4 fw-bold text-primary">Student Management Portal</h1>
            <p class="lead mt-3">Welcome! Use the button below to view our complete student directory.</p>
            <hr class="my-4">
            
            <a href="{{ route('students.index') }}" class="btn btn-primary btn-lg px-5">
                View All Students
            </a>
        </div>
    </div>

</body>
</html>