<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body class="auth-container">
<div class="container-xl">
    <div class="row justify-content-center align-items-center min-vh-100">
        <div class="col-md-8 col-lg-6 col-xl-5">
            <div class="auth-card p-4 p-sm-5">
                <div class="text-center mb-5 position-relative">
                    <div class="neon-pulse"></div>
                    <h2 class="fw-bold mb-1 neon-text">
                        <i class="bi-people me-2"></i>
                        Sign Up
                    </h2>
                </div>
                <form action="{{ route('register') }}" method="POST" id="registrationForm">
                    @csrf

                    <div class="mb-4">
                        <label for="email" class="form-label fw-medium text-w">
                            <i class="bi-envelope-at me-2"></i>Email
                        </label>
                        <input type="email"
                               name="email"
                               id="email"
                               class="form-control form-control-lg text-light"
                               required
                               autofocus
                               placeholder="Ramazan7707@gmail.com"
                               data-validation="email"
                               value="{{old('email')}}">

                        <div class="invalid-feedback" id="emailFeedback"></div>
                    </div>

                    <div class="mb-4 position-relative">
                        <label for="password" class="form-label fw-medium">
                            <i class="bi-lock me-2"></i>Password
                        </label>
                        <input type="password"
                               name="password"
                               id="password"
                               class="form-control form-control-lg"
                               required
                               placeholder="••••••••"
                               data-validation="password">
                        <i class="bi-eye toggle-password text-muted"></i>
                        <div class="password-strength">
                            <div class="strength-indicator bg-danger"></div>
                        </div>
                    </div>
                    <div class="mb-4 position-relative">
                        <label for="password_confirmation" class="form-label fw-medium">
                            <i class="bi-shield-lock me-2"></i>Confirm Password
                        </label>
                        <input type="password"
                               name="password_confirmation"
                               id="password_confirmation"
                               class="form-control form-control-lg"
                               required
                               placeholder="••••••••"
                               data-validation="confirm">
                        <i class="bi-eye toggle-password text-muted" data-target="password_confirmation"></i>
                        <div class="invalid-feedback" id="confirmFeedback"></div>
                    </div>

                    <div class="d-grid mb-4">
                        <button type="submit"
                                class="btn btn-primary btn-lg fw-medium py-3 neon-hover"
                                id="submitBtn">
                            Sign Up
                        </button>
                    </div>

                    <div class="text-center text-muted">
                        <p class="mb-0">
                            Already have an account?
                            <a href="{{ route('login') }}" class="text-decoration-none neon-link">
                                Access Portal
                            </a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<style>
    :root {
        --primary-color: #0d6efd;
        --dark-bg: #0a0a0a;
        --neon-effect: 0 0 15px rgba(13, 110, 253, 0.4);
    }

    body.auth-container {
        min-height: 100vh;
        background: radial-gradient(circle at center, #1a1a1a 0%, var(--dark-bg) 100%);
        color: #e9ecef;
    }

    .auth-card {
        background: rgba(20, 20, 20, 0.95);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 1.5rem;
        box-shadow: var(--neon-effect);
        backdrop-filter: blur(10px);
        transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .auth-card:hover {
        transform: translateY(-5px);
    }

    .form-control {
        background: rgba(255, 255, 255, 0.05);
        border: 1px solid rgba(255, 255, 255, 0.15);
        color: #fff;
        transition: all 0.3s ease;
    }

    .form-control:focus {
        background: rgba(255, 255, 255, 0.1);
        border-color: var(--primary-color);
        box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
    }

    .password-strength {
        height: 4px;
        background: rgba(255, 255, 255, 0.1);
        margin-top: 0.5rem;
        overflow: hidden;
    }

    .strength-indicator {
        height: 100%;
        width: 0;
        transition: width 0.3s ease;
    }

    .toggle-password {
        position: absolute;
        right: 15px;
        top: 50%;
        transform: translateY(-50%);
        cursor: pointer;
        opacity: 0.7;
        transition: opacity 0.3s ease;
    }

    .toggle-password:hover {
        opacity: 1;
    }
</style>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Real-time Validation
    document.addEventListener('DOMContentLoaded', () => {
        const form = document.getElementById('registrationForm');
        const emailInput = document.getElementById('email');
        const passwordInput = document.getElementById('password');
        const strengthIndicator = document.querySelector('.strength-indicator');
        const togglePassword = document.querySelector('.toggle-password');

        // Password Strength Calculator
        const calculateStrength = (password) => {
            let strength = 0;
            if (password.length >= 8) strength += 1;
            if (password.match(/[A-Z]/)) strength += 1;
            if (password.match(/[0-9]/)) strength += 1;
            if (password.match(/[^A-Za-z0-9]/)) strength += 1;
            return strength;
        };

        // Password Strength Visual Update
        passwordInput.addEventListener('input', (e) => {
            const strength = calculateStrength(e.target.value);
            const width = Math.min((strength / 4) * 100, 100);
            strengthIndicator.style.width = `${width}%`;
            strengthIndicator.className = `strength-indicator ${
                width < 50 ? 'bg-danger' :
                    width < 75 ? 'bg-warning' : 'bg-success'
            }`;
        });

        // Toggle Password Visibility
        togglePassword.addEventListener('click', () => {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            togglePassword.classList.toggle('bi-eye');
            togglePassword.classList.toggle('bi-eye-slash');
        });

        // Email Validation
        emailInput.addEventListener('blur', () => {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(emailInput.value)) {
                emailInput.classList.add('is-invalid');
                document.getElementById('emailFeedback').textContent = 'Enter a valid email address';
            } else {
                emailInput.classList.remove('is-invalid');
            }
        });

        // Form Submission Handler
        form.addEventListener('submit', (e) => {
            e.preventDefault();
            const submitBtn = document.getElementById('submitBtn');
            submitBtn.innerHTML = `<span class="spinner-border spinner-border-sm" role="status"></span> Launching...`;
            submitBtn.disabled = true;

            // Simulate API call
            setTimeout(() => {
                form.submit();
            }, 1500);
        });
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        // ... существующие переменные ...
        const confirmInput = document.getElementById('password_confirmation');
        const confirmFeedback = document.getElementById('confirmFeedback');

        // Новая валидация
        const validatePassword = (password) => {
            const hasLetter = /[A-Za-z]/.test(password);
            const hasNumber = /\d/.test(password);
            return hasLetter && hasNumber;
        };

        // Обновлённая проверка силы
        const calculateStrength = (password) => {
            let strength = 0;
            if (password.length >= 8) strength += 1;
            if (/[A-Z]/.test(password)) strength += 1;
            if (/\d/.test(password)) strength += 1;
            if (/[^A-Za-z0-9]/.test(password)) strength += 1;
            return strength;
        };

        // Валидация подтверждения
        const validateConfirmation = () => {
            const isValid = passwordInput.value === confirmInput.value;
            confirmInput.classList.toggle('is-invalid', !isValid);
            confirmFeedback.textContent = isValid ? '' : 'Quantum codes mismatch!';
            return isValid;
        };

        // Обработчики событий
        passwordInput.addEventListener('input', () => {
            const isValid = validatePassword(passwordInput.value);
            passwordInput.classList.toggle('is-invalid', !isValid);

            if (!isValid) {
                document.getElementById('emailFeedback').textContent =
                    'Password must contain (letters) and (numbers)';
            }
        });

        confirmInput.addEventListener('input', validateConfirmation);

        // Обновлённый обработчик отправки
        form.addEventListener('submit', (e) => {
            const isPasswordValid = validatePassword(passwordInput.value);
            const isConfirmValid = validateConfirmation();

            if (!isPasswordValid || !isConfirmValid) {
                e.preventDefault();
                submitBtn.innerHTML = `<i class="bi-x-circle me-2"></i>Security breach!`;
                submitBtn.classList.add('btn-danger');
                setTimeout(() => {
                    submitBtn.innerHTML = `Sign Up`;
                    submitBtn.classList.remove('btn-danger');
                }, 2000);
                return;
            }

            // Остальная логика отправки...
        });
    });
</script>

<!-- Добавьте в CSS: -->
<style>
    [data-validation="confirm"] {
        border-color: rgba(13, 110, 253, 0.5) !important;
    }

    [data-validation="confirm"]:focus {
        box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
    }

    .btn-danger {
        background: #dc3545 !important;
        border-color: #dc3545;
        box-shadow: 0 0 15px rgba(220, 53, 69, 0.4);
    }
</style>
</body>
</html>
