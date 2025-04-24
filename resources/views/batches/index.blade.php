@section('content')
    <div class="container-xl py-4">
        <div class="row justify-content-center">
            <div class="col-xxl-10">
                <div class="card shadow border-0">
                    <div class="card-header bg-primary text-white py-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <h1 class="h4 mb-0">
                                <i class=" bi-people-fill me-2"></i>
                                @lang('Batch Management')
                            </h1>
                            <a href="{{ route('batches.create') }}"
                               class="btn btn-light btn-lg"
                               data-bs-toggle="tooltip"
                               title="@lang('Add Batch')">
                                <i class=" bi-plus-circle me-2"></i>
                                @lang('Add')
                            </a>
                        </div>
                    </div>
                    <div class="card-body px-3 ">
                        <div class="table-responsive-xl">
                            <table class="table table-hover align-middle"
                                   aria-labelledby="coursesTableCaption">
                                <caption class="visually-hidden">
                                    @lang('List of registered batches with contact information')
                                </caption>
                                <thead class="bg-light">
                                <tr>
                                    <th scope="col" class="text-center">#</th>
                                    <th scope="col">@lang('Name')</th>
                                    <th scope="col">@lang('Course')</th>
                                    <th scope="col">@lang('Start Date')
                                    <th scope="col">@lang('Actions')


                                    </th>
                                </tr>
                                </thead>
                                @foreach(
                                        $batches as $batch)
                                    <div class="course-items">


                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$batch->name}}</td>
                                            <td>{{$batch->course->name}}</td>
                                            <td>{{$batch->start_date}}</td>
                                            <td>{{$batch->actions}}


                                                <a href="{{ route('batches.show', $batch) }}"
                                                   class="btn btn-outline-success btn-sm mx-3">
                                                    <i class="bi-eye "></i> @lang('View')
                                                </a>


                                                <!-- Edit button -->
                                                <a href="{{ route('batches.edit', $batch) }}"
                                                   class="btn btn-outline-primary btn-sm mx-3">
                                                    <i class="bi-pencil-square"></i> @lang('Edit')
                                                </a>

                                                {{--      <!-- Delete Form -->--}}
                                                <form method="POST" action="{{ route('batches.destroy', $batch) }}"
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
