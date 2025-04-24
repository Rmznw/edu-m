@extends('layouts')

@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">Batches </h5>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('batches.update', $batch->id) }}" method="PATCH">
                            @csrf
                            @method('PUT')

                            <input type="hidden" name="id" value="{{ $batch->id }}">

                            <div class="mb-4">
                                <label for="name" class="form-label">Name</label>
                                <input type="text"
                                       id="name"
                                       name="name"
                                       value="{{ old('name', $batch->name) }}">
                            </div>


                            <div class="mb-3">
                                <label for="batch" class="form-label">Course</label>
                                <input type="text"
                                       id="batch"
                                       name="batch"
                                       value="{{ old('batch', $batch->course->name) }}">
                            </div>


                            <div class="mb-3">
                                <label for="start_date" class="form-label">Start Date</label>
                                <input type="date"
                                       id="start_date"
                                       name="start_date"
                                       value="{{ old('start_date', $batch->start_date) }}">
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

