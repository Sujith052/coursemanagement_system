@extends('admin.layout.app')

@section('title', 'New Course Enrollment')

@section('content')
<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">New Course Enrollment</h1>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <!-- Form Basic -->
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Course Enrollment</h6>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('enrollments.store') }}">
                        @csrf

                        <div class="form-group">
                            <label for="student_id">Select Student</label>
                            <select class="form-control" id="student_id" name="student_id" required>
                                <option value="">-- Choose Student --</option>
                                @foreach($students as $student)
                                    <option value="{{ $student->id }}">{{ $student->name }} ({{ $student->email }})</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="course_id">Select Course</label>
                            <select class="form-control" id="course_id" name="course_id" required>
                                <option value="">-- Choose Course --</option>
                                @foreach($courses as $course)
                                    <option value="{{ $course->id }}">{{ $course->name }} (₹{{ $course->fee }})</option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Enroll</button>
                    </form>

                    @if(session('success'))
                        <div class="alert alert-success mt-2">
                            {{ session('success') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
