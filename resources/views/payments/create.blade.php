@extends('layouts')

@section('content')
    <div class="container py-4 bg-dark min-vh-100">
        <div class="row justify-content-center">
            <div class="col-md-8">


                <div class="card bg-dark text-white shadow-lg">
                    <div class="card-header bg-primary">
                        <h3 class="mb-0"><i class="bi-cash"></i>Payment</h3>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('payments.store') }}" method="POST">
                            @csrf

                            <div class="mb-4">
                                <label for="enroll_no" class="form-label">Enrollment No</label>
                            <div class="mb-4">
                                <select>
                                    @foreach($enrollments as $id => $enroll_no)
                                        <option value="{{ $id }}">{{ $enroll_no}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-4">
                                <label for="paid_date" class="form-label">Paid Date</label>
                                <input type="date"
                                       class="form-control bg-dark text-white border-secondary-subtle "
                                       id="paid_date"
                                       name="paid_date"
                                       value="{{ old('paid_date') }}"
                                       required>
                            </div>

                                <div class="mb-4">
                                    <label for="amount" class="form-label">Amount</label>
                                    <input type="number"
                                           class="form-control bg-dark text-white border-secondary-subtle "
                                           id="amount"
                                           name="amount"
                                           value="{{ old('amount') }}"
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
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
