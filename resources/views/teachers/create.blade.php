@extends('layouts')

@section('title', 'Teacher Application')

@section('content')
    <div class="container py-5 min-vh-100">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8">
                <div class="card bg-dark-glass shadow-lg border-light">
                    <div class="card-header bg-primary border-light">
                        <h3 class="text-center mb-0">
                            <i class="bi bi-person-rolodex me-2 text-light"></i>
                            Teacher Application
                        </h3>
                    </div>

                    <div class="card-body">
                        @if(session('success'))
                            <div class="alert alert-success bg-success-glass border-success mb-4">
                                <i class="bi bi-check-circle-fill me-2"></i>{{ session('success') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('teachers.store') }}">
                            @csrf

                            <div class="row gap-4">
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label for="name" class="form-label">
                                            <i class="bi bi-person-video3 me-2 text-info"></i>Name
                                        </label>
                                        <input type="text" name="name" id="name"
                                               class="form-control auth-input @error('name') is-invalid @enderror"
                                               value="{{ old('name') }}"
                                               required
                                               autocomplete="given-name"
                                               autofocus>
                                        @error('name')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label for="lastname" class="form-label">
                                            <i class="bi bi-person-lines-fill me-2 text-warning"></i>Last name
                                        </label>
                                        <input type="text" name="lastname" id="lastname"
                                               class="form-control auth-input @error('lastname') is-invalid @enderror"
                                               value="{{ old('lastname') }}"
                                               required
                                               autocomplete="family-name">
                                        @error('lastname')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="mb-4">
                                <label for="age" class="form-label">
                                    <i class="bi bi-calendar2-range-fill me-2 text-danger"></i>Age
                                </label>
                                <input type="number" name="age" id="age"
                                       class="form-control auth-input @error('age') is-invalid @enderror"
                                       value="{{ old('age') }}"
                                       min="25"
                                       max="70"
                                       required>
                                @error('age')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Адрес -->
                            <div class="mb-4">
                                <label for="address" class="form-label">
                                    <i class="bi bi-geo-alt-fill me-2 text-success"></i>Address
                                </label>
                                <textarea name="address" id="address"
                                          class="form-control auth-input @error('address') is-invalid @enderror"
                                          rows="2"
                                          required>{{ old('address') }}</textarea>
                                @error('address')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Телефон -->
                            <div class="mb-4">
                                <label for="phone_number" class="form-label">
                                    <i class="bi bi-telephone-inbound-fill me-2 text-info"></i>Phone
                                </label>
                                <input type="tel" name="phone_number" id="phone_number"
                                       class="form-control auth-input @error('phone_number') is-invalid @enderror"
                                       value="{{ old('phone_number') }}"
                                       pattern="\+?[0-9\s\-\(\)]{7,15}"
                                       required>
                                @error('phone_number')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="d-flex gap-3 justify-content-end mt-5">
                                <button type="reset" class="btn btn-outline-light hover-glow">
                                    <i class="bi bi-arrow-counterclockwise me-2"></i>Сбросить
                                </button>
                                <button type="submit" class="btn btn-primary btn-lg hover-glow">
                                    <i class="bi bi-save2-fill me-2"></i>Сохранить
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .auth-input {
            background: #1a1a1a !important;
            border: 1px solid #404040 !important;
            color: white !important;
            transition: all 0.3s ease;
        }

        .auth-input:focus {
            border-color: #0d6efd !important;
            box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
        }

        .hover-glow:hover {
            filter: brightness(110%);
            transform: translateY(-1px);
        }
    </style>
@endsection

