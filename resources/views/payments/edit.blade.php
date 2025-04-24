@extends('layouts')

@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">Payment </h5>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('batches.update', $payment->id) }}" method="PATCH">
                            @csrf
                            @method('PUT')

                            <input type="hidden" name="id" value="{{ $payment->id }}">

                            <div class="mb-4">
                                <label for="name" class="form-label">Enroll No</label>
                                <input type="text"
                                       id="name"
                                       name="name"
                                       value="{{ old('name', $payment->enroll_no) }}">
                            </div>


                            <div class="mb-3">
                                <label for="paid_date" class="form-label">Paid Date</label>
                                <input type="date"
                                       id="paid_date"
                                       name="paid_date"
                                       value="{{ old('paid_date', $payment->paid_date) }}">
                            </div>


                            <div class="mb-3">
                                <label for="amount" class="form-label">Amount</label>
                                <input type="date"
                                       id="amount"
                                       name="amount"
                                       value="{{ old('amount', $payment->amount) }}">
                            </div>


                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button type="submit" class="btn btn-primary">
                                    <i class="bi-save-fill me-2"></i>Save
                                </button>
                                <a href="{{ route('payments.index') }}" class="btn btn-secondary">
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

