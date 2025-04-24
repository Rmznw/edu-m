<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-icons.min.css') }}" rel="stylesheet">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body class="bg-dark text-light" data-bs-theme="dark">
<div class="container-xl px-0" >
    <nav class="navbar navbar-expand-xl navbar-dark bg-dark py-3 px-4 border-bottom border-dark">
        <div class="container-xl">
            <a class="navbar-brand d-flex align-items-center" href="/">
                <i class="bi-mortarboard-fill fs-3 text-primary me-2"></i>
                <span class="h4 mb-0">EduPortal</span>
            </a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 gap-2">
                    <li class="nav-item">
                        <a class="nav-link btn btn-dark hover-glow mx-1 py-2" href="{{route('students.index')}}"
                           data-aos="fade-up"
                           data-aos-delay="100">
                            <i class="bi bi-people-fill me-2"></i>Students
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-dark hover-glow mx-1 py-2" href="{{route('teachers.index')}}"
                           data-aos="fade-up"
                           data-aos-delay="100">
                            <i class="bi bi-person-badge-fill me-2"></i>Teachers
                        </a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link btn btn-dark hover-glow mx-1 py-2" href="{{route('categories.index')}}"
                           data-aos="fade-up"
                           data-aos-delay="100">
                            <i class=" bi-list me-2"></i>Category
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-dark hover-glow mx-1 py-2" href="{{route('courses.index')}}"
                           data-aos="fade-up"
                           data-aos-delay="100">
                            <i class="bi bi-journal-bookmark-fill me-2"></i>Courses
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-dark hover-glow mx-1 py-2" href="{{route('batches.index')}}"
                           data-aos="fade-up"
                           data-aos-delay="100">
                            <i class="bi-collection-fill me-2"></i>Batches
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-dark hover-glow mx-1 py-2" href="{{route('enrollments.index')}}"
                           data-aos="fade-up"
                           data-aos-delay="100">
                            <i class="bi bi-clipboard2-check me-2"></i>Enrollment
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-dark hover-glow mx-1 py-2"href="{{route('payments.index')}}"
                           data-aos="fade-up"
                           data-aos-delay="100">
                            <i class="bi bi-credit-card-2-back-fill me-2"></i>Payment
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-dark hover-glow mx-1 py-2"href="{{route('show.register')}}"
                           data-aos="fade-up"
                           data-aos-delay="100">
                            <i class="bi-person-plus-fill me-2"></i>Register
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link btn btn-dark hover-glow mx-1 py-2"href="{{route('show.login')}}"
                           data-aos="fade-up"
                           data-aos-delay="100">
                            <i class="bi-box-arrow-in-right me-2"></i>Login
                        </a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link btn btn-dark hover-glow mx-1 py-2"href="{{route('show.register')}}"
                           data-aos="fade-up"
                           data-aos-delay="100">
                            <i class="bi-box-arrow-in-right me-2"></i>Logout
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="page-enter-active">
        <div class="container-xl py-4 mt-4">
            @yield('content')
        </div></div>
</div>
























<script src="https://unpkg.com/aos@2.3.1/dist/aos.js">



</script>
<script>
    // Initialize animations
    document.addEventListener('DOMContentLoaded', () => {
        AOS.init({
            offset: 15,
            duration: 1000,
            easing: 'ease-out-quad',
            once: true
        });


    });
</script>
<style>
    :root {
        --ease-out-quad: cubic-bezier(0.5, 1, 0.89, 1);
        --ease-in-out-back: cubic-bezier(0.68, -0.55, 0.265, 1.55);
        --animation-timing: 0.4s;
    }

    /* Dynamic Hover Effects */
    .nav-link {
        position: relative;
        overflow: hidden;
        transition: transform 0.3s var(--ease-out-quad),
        box-shadow 0.4s var(--ease-in-out-back);
    }

    .nav-link::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: radial-gradient(circle at var(--x) var(--y),
        rgba(59, 130, 246, 0.15) 0%,
        transparent 70%);
        opacity: 0;
        transition: opacity 0.3s;
        pointer-events: none;
    }

    .nav-link:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 20px -6px rgba(59, 130, 246, 0.3);
    }

    .nav-link:hover::before {
        opacity: 1;
    }

    /* Page Transition System */
    .page-transition {
        animation: pageIn 0.6s var(--ease-out-quad) forwards;
    }

    @keyframes pageIn {
        0% {
            opacity: 0;
            transform: translateY(20px) rotateX(10deg);
        }
        100% {
            opacity: 1;
            transform: translateY(0) rotateX(0);
        }
    }

    /* Card Animation */
    .card-animate {
        transition: all 0.4s var(--ease-in-out-back);
        transform-origin: center bottom;
    }

    .card-animate:hover {
        transform: translateY(-5px) scale(1.02);
        box-shadow: 0 12px 25px -8px rgba(0,0,0,0.3);
    }

    /* Input Field Interactions */
    .form-control {
        transition: all 0.3s var(--ease-out-quad),
        box-shadow 0.3s ease;
    }

    .form-control:focus {
        transform: scale(1.02);
        box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.3);
    }

    /* Advanced Loader */
    .loader {
        width: 48px;
        height: 48px;
        border: 3px solid #3B82F6;
        border-radius: 50%;
        position: relative;
        animation: rotate 1.2s var(--ease-in-out-back) infinite;
    }

    .loader::before {
        content: '';
        position: absolute;
        top: -3px;
        left: -3px;
        width: 100%;
        height: 100%;
        border: 3px solid transparent;
        border-top-color: #fff;
        border-radius: 50%;
        animation: spin 1s ease infinite;
    }

    @keyframes rotate {
        0% { transform: rotate(0deg) scale(1); }
        50% { transform: rotate(180deg) scale(1.1); }
        100% { transform: rotate(360deg) scale(1); }
    }

    /* Mobile Optimized Animations */
    @media (max-width: 768px) {
        .nav-link:hover {
            transform: none;
        }

        .card-animate {
            transition: none;
        }
    }

    /* Accessibility */
    @media (prefers-reduced-motion: reduce) {
        * {
            animation: none !important;
            transition: none !important;
        }
    }

    :root {
        --x: 50%;
        --y: 50%;
    }

    [data-parallax] {
        transition: transform 0.3s ease-out;
    }

    .nav-link {
        position: relative;
        overflow: hidden;
        transition: transform 0.2s ease-out !important;
    }

    .nav-link::after {
        content: '';
        position: absolute;
        inset: 0;
        background: radial-gradient(circle at var(--x) var(--y),
        rgba(59, 130, 246, 0.15) 0%,
        transparent 70%);
        opacity: 0;
        transition: opacity 0.3s;
    }

    .nav-link:hover::after {
        opacity: 0.4;
    }

    .page-enter-active {
        animation: pageEnter 0.6s ease-out forwards;
    }

    @keyframes pageEnter {
        from {
            opacity: 0;
            transform: translateY(20px) perspective(1000px) rotateX(5deg);
        }
        to {
            opacity: 1;
            transform: none;
        }
    }

</style>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Dynamic hover position tracking
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('mousemove', (e) => {
                const rect = link.getBoundingClientRect();
                link.style.setProperty('--x', `${e.clientX - rect.left}px`);
                link.style.setProperty('--y', `${e.clientY - rect.top}px`);
            });
        });

        // Staggered animations
        const animateElements = (selector, delay = 100) => {
            document.querySelectorAll(selector).forEach((el, i) => {
                el.style.transitionDelay = `${i * delay}ms`;
                el.classList.add('opacity-0'); // Reset for animation
                setTimeout(() => el.classList.remove('opacity-0'), 10);
            });
        };

        animateElements('.card-animate', 150);
        animateElements('.nav-link', 75);
    });
</script>

</body>
</html>
