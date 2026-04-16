<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-5">
    <h2 class="mb-4">Student Directory</h2>
    <div class="list-group">
        @foreach($students as $student)
            <div class="list-group-item d-flex justify-content-between align-items-center">
                {{ $student['name'] }}
                <a href="{{ route('students.show', $student['id']) }}" class="btn btn-sm btn-info text-white">View Profile</a>
            </div>
        @endforeach
    </div>
    <a href="{{ route('home') }}" class="mt-3 d-inline-block text-secondary">← Back to Home</a>
</div>