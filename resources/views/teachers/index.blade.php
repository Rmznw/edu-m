@extends('layouts')

@section('content')
    <div class="container-xl py-4">
        <div class="row justify-content-center">
            <div class="col-xxl-10">
                <div class="card border-0 shadow-soft">
                    <div class="card-header bg-primary py-4">
                        <div class="d-flex justify-content-between align-items-center">
                            <h1 class="h3 mb-0 text-white">
                                <i class=" bi-person-fill me-3"></i>
                                @lang('Teacher Application')
                            </h1>
                            <a href="{{ route('teachers.create') }}"
                               class="btn btn-light btn-lg hover-soft"
                               data-bs-toggle="tooltip"
                               title="@lang('Add New Teacher')">
                                <i class=" bi-plus-circle me-2"></i>
                                @lang('Add')
                            </a>
                        </div>
                    </div>

                    <div class="card-body px-0">
                        <div class="table-responsive-xl rounded-bottom">
                            <table class="table table-hover align-middle mb-0 bg-white">
                                <caption class="visually-hidden">
                                    @lang('List of registered teachers with contact information')
                                </caption>
                                <thead class="bg-snow">
                                <tr>
                                    <th scope="col" class="text-center">#</th>
                                    <th scope="col">@lang('Full Name')</th>
                                    <th scope="col" class="d-none d-md-table-cell">@lang('Age')</th>
                                    <th scope="col" class="d-none d-lg-table-cell">@lang('Address')</th>
                                    <th scope="col">@lang('Contact')</th>
                                    <th scope="col" class="text-end pe-4">@lang('Actions')</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($teachers as $teacher)
                                    <tr class="hover-soft-bg">
                                        <td class="text-center fw-bold text-secondary">{{ $loop->iteration }}</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="avatar-circle me-3">
                                                    <div class="avatar-initial bg-sky-100 text-sky-600">
                                                        {{ strtoupper(substr($teacher->name, 0, 1)) }}
                                                    </div>
                                                </div>
                                                <span class="text-truncate">{{ $teacher->name }}</span>
                                            </div>
                                        </td>
                                        <td class="d-none d-md-table-cell text-muted">{{ $teacher->age }}</td>
                                        <td class="d-none d-lg-table-cell text-truncate text-secondary">{{ $teacher->address }}</td>
                                        <td>


                                            <a href="tel:{{ $teacher->phone_number }}"
                                               class="text-decoration-none link-sky">
                                                <i class="bi bi-telephone me-2"></i>{{ $teacher->phone_number }}
                                            </a>
                                        <td>
                                            <div class="d-flex justify-content-end gap-2 pe-3">


                                                <a href="{{ route('teachers.show', $teacher) }}"
                                                   class="btn btn-sm btn-outline-success hover-soft px-3 py-2">
                                                    <i class="bi bi-eye"></i>
                                                    <span class="d-none d-sm-inline">@lang('View')</span>
                                                </a>


                                                <a href="{{ route('teachers.edit', $teacher) }}"
                                                   class="btn btn-sm btn-outline-primary hover-soft px-3 py-2">
                                                    <i class="bi bi-pencil-square"></i>
                                                    <span class="d-none d-sm-inline">@lang('Edit')</span>
                                                </a>


                                                <form method="POST"
                                                      action="{{ route('teachers.destroy', $teacher) }}"
                                                      class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                            class="btn btn-sm btn-outline-danger hover-soft px-3 py-2"
                                                            onclick="return confirm('@lang('Are you sure?')')">
                                                        <i class="bi bi-trash3"></i>
                                                        <span class="d-none d-sm-inline">@lang('Delete')</span>
                                                    </button>
                                                </form>


                                            </div>
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
    </div>
@endsection

@push('css')

    <style>
        .shadow-soft {
            box-shadow: 0 8px 30px rgba(150, 170, 180, 0.12) !important;
        }

        .bg-gradient-sky {
            background: linear-gradient(135deg, #e3f2fd 0%, #bbdefb 100%);
        }

        .bg-snow {
            background-color: #f8f9fa !important;
        }

        .hover-soft-bg:hover {
            background-color: rgba(227, 242, 253, 0.3) !important;
        }

        .avatar-circle {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: rgba(187, 222, 251, 0.3);
        }

        .avatar-initial {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 500;
            font-size: 1.2rem;
        }

        .link-sky {
            color: #1976d2 !important;
            transition: color 0.2s;
        }

        .link-sky:hover {
            color: #0d47a1 !important;
        }

        .btn-sky {
            background-color: #2196f3;
            color: white !important;
            border-color: transparent;
        }

        .hover-soft {
            transition: all 0.2s ease;
        }

        .hover-soft:hover {
            transform: translateY(-1px);
            filter: brightness(98%);
        }
    </style>
    <script>
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('page-transition');
                }
            });
        }, { threshold: 0.1 });

        document.querySelectorAll('.section').forEach(el => observer.observe(el));

    </script>
@endpush
