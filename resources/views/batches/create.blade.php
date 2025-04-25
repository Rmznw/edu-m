@extends('layouts')

@section('content')
    <div class="container py-4 bg-dark min-vh-100">
        <div class="row justify-content-center">
            <div class="col-md-8">


                <div class="card bg-dark text-white shadow-lg">
                    <div class="card-header bg-primary">
                        <h3 class="mb-0"><i class=" bi-journal-plus"></i>Batches</h3>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('batches.store') }}" method="POST">
                            @csrf

                            <div class="mb-4">
                                <label for="name" class="form-label">Name</label>
                                <input type="text"
                                       class="form-control bg-dark text-white border-secondary-subtle"
                                       id="name"
                                       name="name"
                                       value="{{ old('name') }}"
                                       required
                                       autofocus>
                            </div>
                            <div class="mb-4 form-control">
                                <label>Courses</label>
                                <select name="course_id" id="course_id" class="form_control">
                                    @foreach($courses as $id => $name)
                                        <option value="{{ $id }}">{{ $name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-4">
                                <label for="start_date" class="form-label">Start Date</label>
                                <input type="date"
                                       class="form-control bg-dark text-white border-secondary-subtle "
                                       id="start_date"
                                       name="start_date"
                                       value="{{ old('start_date') }}"
                                       required>
                            </div>

                            <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-4">
                                <button type="reset" class="btn btn-outline-light me-md-2">
                                    <i class=" bi-eraser"></i>Erase
                                </button>
                                <button type="submit" class="btn btn-success">
                                    <i class=" bi-save"></i> Save
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
