<div class="container-newsletter py-4 py-md-5" style="background-color: teal">
    <div class=" text-white">
        <div class="container px-4 px-md-5">
            <div class="row align-items-center gy-4 gy-md-0">
                <!-- Left side: Text -->
                <div class="col-md-6 pe-md-5">
                    <h2 class="fw-bold mb-3" style="font-size: 24px; font-weight: 600;">Let's Get In Touch!</h2>
                    <p class="mb-0 opacity-90">What's inside? Exclusive sales, new arrivals & much more.</p>
                </div>

                <!-- Right side: Form -->
                <div class="col-md-6">
                    <form class="d-flex flex-column flex-sm-row gap-3 gap-sm-0">
                        <div class="input-group">
                            <span class="input-group-text bg-transparent border-0 text-white">
                                <i class="bi bi-envelope"></i>
                            </span>
                            <input type="email" class="form-control bg-transparent text-white border-white"
                                placeholder="Email Address" aria-label="Email Address" style="border-right: none;">
                            <button class="btn btn-white text-teal fw-bold" type="submit" style="border-left: none;">
                                SIGN UP
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@push('styles')
<style>
    .container-newsletter {
        background-color: #008080;
    }

    .container-newsletter {
        color: #008080 !important;
    }

    .container-newsletter .btn-white {
        background-color: #ffffff !important;
        color: #008080 !important;
        border: 1px solid #ffffff;
    }

    .container-newsletter .btn-white:hover {
        background-color: #f8f9fa !important;
    }

    /* Form group styling */
    .container-newsletter .input-group {
        border: 1px solid #ffffff;
        border-radius: 6px;
        overflow: hidden;
    }

    .container-newsletter .input-group-text {
        background-color: transparent !important;
        border: none;
        padding-left: 1rem;
    }

    .container-newsletter .form-control {
        background-color: transparent !important;
        color: #ffffff !important;
        border: none;
        padding-left: 0.5rem;
    }

    .container-newsletter .form-control::placeholder {
        color: #ffffff !important;
        opacity: 0.8;
    }

    .container-newsletter .form-control:focus {
        box-shadow: none;
        background-color: transparent;
    }

    /* Button styling */
    .container-newsletter .btn {
        border-radius: 0;
        padding: 0.65rem 1.5rem;
        font-weight: 600;
    }

    /* Responsive: stack on mobile */
    @media (max-width: 576px) {
        .container-newsletter .input-group {
            flex-direction: column;
        }

        .container-newsletter .input-group-text,
        .container-newsletter .form-control,
        .container-newsletter .btn {
            border-radius: 6px !important;
            border: 1px solid #ffffff !important;
            border-left: 1px solid #ffffff !important;
        }

        .container-newsletter .form-control {
            border-top: none !important;
            border-top-left-radius: 0 !important;
            border-top-right-radius: 0 !important;
        }

        .container-newsletter .btn {
            border-top: none !important;
            border-top-left-radius: 0 !important;
            border-top-right-radius: 0 !important;
        }
    }
</style>
@endpush