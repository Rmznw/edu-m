@section('content')
    <div class="container-xl py-4">
        <div class="row justify-content-center">
            <div class="col-xxl-10">
                <div class="card shadow border-0">
                    <div class="card-header bg-primary text-white py-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <h1 class="h4 mb-0">
                                <i class=" bi-people-fill me-2"></i>
                                @lang('Course Management')
                            </h1>
                            <a href="{{ route('courses.create') }}"
                               class="btn btn-light btn-lg"
                               data-bs-toggle="tooltip"
                               title="@lang('Add Course')">
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
                                    @lang('List of registered Course with contact information')
                                </caption>
                                <thead class="bg-light">
                                <tr>
                                    <th scope="col" class="text-center">#</th>
                                    <th scope="col">@lang('Name')</th>
                                    <th scope="col">@lang('Syllabus')</th>
                                    <th scope="col">@lang('Duration')
                                    <th scope="col">@lang('Actions')


                                    </th>
                                </tr>
                                </thead>
                                @foreach(
                                        $courses as $course)
                                    <div class="course-items">


                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$course->name}}</td>
                                            <td>{{$course->syllabus}}</td>
                                            <td>{{$course->duration()}}</td>
                                            <td>{{$course->actions}}


                                                <div class=" gap-5 justify-content-end flex-nowrap">
                                                    <a href="{{ route('courses.show', $course) }}"
                                                       class="btn btn-outline-success btn-sm"
                                                       data-bs-toggle="tooltip"
                                                       title="@lang('View')">
                                                        <i class="bi-eye fs-5"></i>
                                                    </a>

                                                    <a href="{{ route('courses.edit', $course) }}"
                                                       class="btn btn-outline-primary btn-sm"
                                                       data-bs-toggle="tooltip"
                                                       title="@lang('Edit')">
                                                        <i class="bi-pencil-square fs-5"></i>
                                                    </a>

                                                    <form method="POST"
                                                          action="{{ route('courses.destroy', $course) }}"
                                                          class="d-inline-block">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                                class="btn btn-outline-danger btn-sm"
                                                                data-bs-toggle="tooltip"
                                                                title="@lang('Delete')">
                                                            <i class="bi-trash fs-5"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            <td>
                                        </tr>
                                    </div>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <style>
        .btn-sm {
            min-width: 32px !important;
            border-width: 1px !important;
        }

        /* Фикс для мобильных устройств */
        @media (max-width: 768px) {
            .btn-sm {
                padding: 0.25rem !important;
            }

            td:nth-child(5) {
                text-align: center !important;
            }
        }

        @media (max-width: 768px) {
            .table-responsive-xl td:nth-child(4) {
                min-width: 220px;
            }
        }

        .delete-form {
            margin: 0;
            display: inline-block;
        }
    </style>
    @extends('layouts')
@endsection
@push('css')
@endpush
