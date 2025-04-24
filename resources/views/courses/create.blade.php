@extends('layouts')

@section('content')
    <div class="container py-4 bg-dark min-vh-100">
        <div class="row justify-content-center">
            <div class="col-md-8">


                <div class="card bg-dark text-white shadow-lg">
                    <div class="card-header bg-primary">
                        <h3 class="mb-0"><i class=" bi-journal-plus"></i> Making new course</h3>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('courses.store') }}" method="POST">
                            @csrf

                            <div class="mb-4">
                                <label for="name" class="form-label">name</label>
                                <input type="text"
                                       class="form-control bg-dark text-white border-secondary-subtle"
                                       id="name"
                                       name="name"
                                       value="{{ old('name') }}"
                                       required
                                       autofocus>
                            </div>

                            <div class="mb-4">
                                <label for="syllabus" class="form-label">Syllabus</label>
                                <input type="text"
                                       class="form-control bg-dark text-white border-secondary-subtle "
                                       id="syllabus"
                                       name="syllabus"
                                       value="{{ old('syllabus') }}"
                                       required>
                            </div>

                            <div class="mb-4">
                                <label for="duration" class="form-label">Duration</label>
                                <input type="number"
                                       class="form-control bg-dark text-white border-secondary-subtle "
                                       id="duration"
                                       name="duration"
                                       value="{{ old('duration') }}"
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
