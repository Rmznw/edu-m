@extends('layouts')

@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">Edit Page</h5>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('courses.update', $enrollment->id) }}" method="PATCH">
                            @csrf
                            @method('PUT')

                            <input type="hidden" name="id" value="{{ $enrollment->id }}">

                            <div class="mb-4">
                                <label for="name" class="form-label">Name</label>
                                <input type="text"
                                       id="name"
                                       name="name"
                                       value="{{ old('name', $enrollments->enroll_no) }}">
                            </div>


                            <div class="mb-3">
                                <label for="batch_id" class="form-label">Batch Id</label>
                                <input type="text"
                                       id="batch_id"
                                       name="batch_id
                                       value="{{ old('$enrollment', $enrollments->batch->name) }}">
                            </div>


                            <div class="mb-3">
                                <label for="student_id" class="form-label">Student Id</label>
                                <input type="date"
                                       id="student_id"
                                       name="student_id"
                                       value="{{ old('student_id', $enrollments->student_id }}">
                            </div>

                            <div class="mb-3">
                                <label for="join_date" class="form-label">Join Date</label>
                                <input type="date"
                                       id="join_date"
                                       name="join_date"
                                       value="{{ old('join_date', $enrollments->join_date }}">
                            </div>


                            <div class="mb-3">
                                <label for="fee" class="form-label">Fee</label>
                                <input type="number"
                                       id="fee"
                                       name="fee"
                                       value="{{ old('fee', $enrollments->fee }}">
                            </div>




                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button type="submit" class="btn btn-primary">
                                    <i class="bi-save-fill me-2"></i>Save
                                </button>
                                <a href="{{ route('courses.index') }}" class="btn btn-secondary">
                                    <i class="bi-times me-2"></i>Cancel
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

