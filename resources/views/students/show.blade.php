<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-dark text-white">Student Details</div>
        <div class="card-body">
            <h5 class="card-title">Student Profile</h5>
            <p class="card-text">Currently viewing data for Student with <strong>ID: {{ $id }}</strong></p>
            <a href="{{ route('students.index') }}" class="btn btn-outline-primary">Back to Directory</a>
        </div>
    </div>
</div>