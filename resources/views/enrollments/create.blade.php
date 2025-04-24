@extends('layouts')

@section('content')
    <div class="container py-4 bg-dark min-vh-100">
        <div class="row justify-content-center">
            <div class="col-md-8">


                <div class="card bg-dark text-white shadow-lg">
                    <div class="card-header bg-primary">
                        <h3 class="mb-0"><i class=" bi-journal-plus"></i>Enrollment</h3>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('enrollments.store') }}" method="POST">
                            @csrf

                            <div class="mb-4">
                                <label for="enroll_no" class="form-label">Enroll No</label>
                                <input type="number"
                                       class="form-control bg-dark text-white border-secondary-subtle"
                                       id="enroll_no"
                                       name="enroll_no"
                                       value="{{ old('enroll_no') }}"
                                       required
                                       autofocus>
                            </div>

                            <div class="mb-4">
                                <label for="batch_id" class="form-label">Batch</label>
                                <input type="text"
                                       class="form-control bg-dark text-white border-secondary-subtle "
                                       id="batch_id"
                                       name="batch_id"
                                       value="{{ old('batch_id') }}"
                                       required>
                            </div>

                            <div class="mb-4">
                                <label for="student_id" class="form-label">Student</label>
                                <input type="text"
                                       class="form-control bg-dark text-white border-secondary-subtle "
                                       id="student_id"
                                       name="student_id"
                                       value="{{ old('student_id') }}"
                                       required>
                            </div>

                            <div class="mb-4">
                                <label for="join_date" class="form-label">Join Date</label>
                                <input type="date"
                                       class="form-control bg-dark text-white border-secondary-subtle "
                                       id="join_date"
                                       name="join_date"
                                       value="{{ old('join_date') }}"
                                       required>
                            </div>



                            <div class="mb-4">
                                <label for="fee" class="form-label">Fee</label>
                                <input type="number"
                                       class="form-control bg-dark text-white border-secondary-subtle "
                                       id="fee"
                                       name="fee"
                                       value="{{ old('fee') }}"
                                       required>
                            </div>


                            <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-4">
                                <button type="reset" class="btn btn-outline-light me-md-2">
                                    <i class="bi bi-eraser"></i> Erase
                                </button>
                                <button type="submit" class="btn btn-success">
                                    <i class="bi bi-save"></i> Save
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
