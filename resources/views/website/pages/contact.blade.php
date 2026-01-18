@extends('website.layout.main')
@section('content')
    <section class="hero-section container-fluid my-4">
        <div class="row justify-content-between align-items-center">
            <div class="col-md-12 hero-image"
                style="background-image: url({{ asset('/images/website/about.png') }}); background-size: cover; background-position: center; min-height: 470px; border-radius: 15px;">
            </div>
        </div>
    </section>
    <section class="contact-section py-5 bg-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <!-- Title -->
                    <h2 class="text-center fw-bold mb-4">Get In Touch</h2>
                    <p class="text-center text-muted mb-5">
                        Please enter the details of your request. A member of our support staff will respond as soon as
                        possible.
                    </p>

                    <div class="row">
                        <!-- Left: Contact Info -->
                        <div class="col-md-5 mb-5 mb-md-0">
                            <div class="pe-md-5">
                                <h5 class="fw-bold">Address:</h5>
                                <p class="text-muted mb-4">
                                    softstyle fashion Ltd.<br>
                                    Shop No. 10, Gulshan, Dhaka-1000, Bangladesh
                                </p>

                                <p class="text-muted mb-2">
                                    <strong>Email:</strong> support@softstylefashion.com
                                </p>
                                <p class="text-muted mb-2">
                                    <strong>Mobile Number:</strong> +8801798438494
                                </p>

                                <h6 class="fw-bold mt-4 mb-3">Customer Service Hours:</h6>
                                <p class="text-muted">
                                    Saturday to Thursday<br>
                                    from 10 am to 8 pm
                                </p>

                                <div class="mt-4">
                                    <h6 class="fw-bold mb-3">Follow Us On</h6>
                                    <div class="d-flex gap-3">
                                        <a href="#" class="text-dark"><i class="bi bi-facebook fs-4"></i></a>
                                        <a href="#" class="text-dark"><i class="bi bi-instagram fs-4"></i></a>
                                        <a href="#" class="text-dark"><i class="bi bi-youtube fs-4"></i></a>
                                        <a href="#" class="text-dark"><i class="bi bi-tiktok fs-4"></i></a>
                                        <a href="#" class="text-dark"><i class="bi bi-twitter fs-4"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Right: Contact Form -->
                        <div class="col-md-7">
                            <form>
                                <div class="row g-3">
                                    <div class="col-12 col-sm-6">
                                        <label class="form-label fw-medium">Full Name <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control "
                                            placeholder="Enter your name" required>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <label class="form-label fw-medium">Email <span class="text-danger">*</span></label>
                                        <input type="email" class="form-control "
                                            placeholder="Enter your email" required>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label fw-medium">Phone Number <span
                                                class="text-danger">*</span></label>
                                        <input type="tel" class="form-control "
                                            placeholder="Enter your number" required>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label fw-medium">Your Message</label>
                                        <textarea class="form-control rounded-3" rows="5" placeholder=""></textarea>
                                    </div>
                                    <div class="col-12 text-center mt-4">
                                        <button type="submit"
                                            class="btn btn-teal text-white px-5 py-3  fw-bold">
                                            Submit Now
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="newsletter">
        @include('website.component.newsletter')
    </section>
@endsection

@push('styles')
    <style>
        .contact-section .form-control {
            background-color: #f8f9fa;
            border: none;
            padding: 0.75rem 1.25rem;
        }

        .contact-section .form-control:focus {
            box-shadow: 0 0 0 0.2rem rgba(0, 128, 128, 0.15);
            border-color: #008080;
        }

        .contact-section textarea.form-control {
            resize: none;
        }

        .btn-teal {
            background-color: #008080;
        }

        .btn-teal:hover {
            background-color: #006666;
        }
    </style>
@endpush
