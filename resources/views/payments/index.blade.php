@section('content')
    <div class="container-xl py-4">
        <div class="row justify-content-center">
            <div class="col-xxl-10">
                <div class="card shadow border-0">
                    <div class="card-header bg-primary text-white py-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <h1 class="h4 mb-0">
                                <i class=" bi-people-fill me-2"></i>
                                @lang('Payment')
                            </h1>
                            <a href="{{ route('payments.create') }}"
                               class="btn btn-light btn-lg"
                               data-bs-toggle="tooltip"
                               title="@lang('Add Payment')">
                                <i class=" bi-plus-circle me-2"></i>
                                @lang('Add')
                            </a>
                        </div>
                    </div>
                    <div class="card-body px-3 ">
                        <div class="table-responsive-xl">
                            <table class="table table-hover align-middle"
                                   aria-labelledby="paymentTableCaption">
                                <caption class="visually-hidden">
                                    @lang('List of registered Payments with contact information')
                                </caption>
                                <thead class="bg-light">
                                <tr>
                                    <th scope="col" class="text-center">#</th>
                                    <th scope="col">@lang('Enroll No')</th>
                                    <th scope="col">@lang('Paid Date')</th>
                                    <th scope="col">@lang('Amount')
                                    <th scope="col">@lang('Actions')


                                    </th>
                                </tr>
                                </thead>
                                @foreach(
                                        $payments as $payment)
                                    <div class="course-items">


                                        <tr>
                                            <td>{{$loop->iteration}}</td>

                                            <td>@if($payment->enrollment)
                                                    {{ $payment->enrollment->enroll_no }}
                                                @else
                                                    <span class="text-muted">N/A</span>
                                                @endif

                                                {{$payment->enroll_no}}</td>
                                            <td>{{$payment->join_date}}</td>
                                            <td>{{$payment->amount}}</td>
                                            <td>{{$payment->actions}}


                                                <a href="{{ route('payments.show', $payment) }}"
                                                   class="btn btn-outline-success btn-sm mx-3">
                                                    <i class="bi-eye "></i> @lang('View')
                                                </a>


                                                <!-- Edit button -->
                                                <a href="{{ route('payments.edit', $payment) }}"
                                                   class="btn btn-outline-primary btn-sm mx-3">
                                                    <i class="bi-pencil-square"></i> @lang('Edit')
                                                </a>

                                                {{--      <!-- Delete Form -->--}}
                                                <form method="POST" action="{{ route('payments.destroy', $payment) }}"
                                                      class="d-inline delete-form"
                                                      data-confirm="@lang('Confirm deletion?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-outline-danger btn-sm mx-3">
                                                        <i class=" bi-trash"></i> @lang('Delete')
                                                    </button>
                                                </form>
                                            </td>
                                    </div>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @extends('layouts')
@endsection
@push('css')
@endpush
