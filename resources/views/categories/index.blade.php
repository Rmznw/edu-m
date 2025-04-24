@section('content')
    <div class="container-xl py-4">
        <div class="row justify-content-center">
            <div class="col-xxl-10">
                <div class="card shadow border-0">
                    <div class="card-header bg-primary text-white py-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <h1 class="h4 mb-0">
                                <i class="bi-people-fill me-2"></i>
                                @lang('Courses')
                            </h1>
                            <a href="{{ route('categories.index') }}"
                               class="btn btn-light btn-lg px-4"
                               data-bs-toggle="tooltip"
                               title="@lang('Add Course')">
                                <i class="bi-plus-circle me-2"></i>
                                @lang('Add')
                            </a>
                        </div>
                    </div>
                    <div class="card-body px-3 py-4">
                        <div class="table-responsive-xl">
                            <table class="table table-hover align-middle" aria-labelledby="coursesTableCaption">
                                <caption class="visually-hidden">
                                    @lang('List of registered Course with contact information')
                                </caption>
                                <thead class="bg-light">
                                <tr>
                                    <th scope="col" class="text-center">#</th>
                                    <th scope="col">@lang('Title')</th>
                                    <th scope="col">@lang('Description')</th>
                                    <th scope="col">@lang('Category')</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($categories as $category)
                                    <tr class="align-middle">
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td class="fw-semibold">{{ $category->title }}</td>
                                        <td class="text-muted">{{ ($category->description) }}</td>
                                        <td>
                                            <span class="badge bg-primary-subtle text-primary">{{ $category->category }}</span>
                                        </td>
                                        <td>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @extends('layouts')
@endsection
@push('css')
@endpush
