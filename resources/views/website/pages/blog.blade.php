@extends('website.layout.main')
@section('content')
    <section class="blog-section py-5 bg-white">
        <div class="container-fluid padding-x-80">
            <!-- Blog Posts Grid -->
            <div class="row g-4">
                <!-- Single Blog Card (Repeat this block for multiple posts) -->
                <div class="col-lg-4 col-md-6">
                    <div class="card border-0 shadow-sm overflow-hidden h-100">
                        <div class="position-relative">
                            <img src="https://www.shutterstock.com/image-photo/mock-image-plain-green-front-260nw-2526219085.jpg"
                                alt="Men's Premium Blank T-shirt green" class="card-img-top"
                                style="height: 380px; object-fit: cover;">
                            <div class="position-absolute top-0 start-0 p-3">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title fw-bold">
                            Men's Premium Blank T-shirt green | Organic Ringspun Combed Compact Cotton | 100% Cotton
                            Basic T-Shirt Combo Pack
                        </h5>
                        <p class="text-muted small mb-3">June 02, 2025</p>
                        <p class="card-text text-muted flex-grow-1">
                            Softstyle Fashion Men's Premium Quality t-shirt that offers a much smoother silky feel and
                            more structured, mid-weight fit than the regular t-shirt. Fashion Men's Premium Quality
                            t-shirt that offers a much smoother, mid-weight fit than the regular t-shirt, silky feel and
                            more structured, Softstyle Fashion Men's Premium Quality t-shirt that offers much
                            smoother...
                        </p>

                        <div class="mt-4">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <span class="text-muted small">Share Post:</span>
                                <div class="d-flex gap-3">
                                    <a href="#" class="text-dark"><i class="bi bi-facebook"></i></a>
                                    <a href="#" class="text-dark"><i class="bi bi-instagram"></i></a>
                                    <a href="#" class="text-dark"><i class="bi bi-twitter"></i></a>
                                    <a href="#" class="text-dark"><i class="bi bi-youtube"></i></a>
                                    <a href="#" class="text-dark"><i class="bi bi-tiktok"></i></a>
                                </div>
                            </div>
                            <a href="#" class="btn btn-teal text-white px-4 py-2 fw-semibold">Read
                                More</a>
                        </div>
                    </div>
                </div>
                <!-- End Single Blog Card -->

                <!-- Add more cards here for other posts -->
            </div>
        </div>
    </section>

    <x-website.blog-section />


    <section class="newsletter">
        @include('website.component.newsletter')
    </section>
@endsection

@push('styles')
    <style>
        .blog-section .card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .blog-section .card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1) !important;
        }

        .btn-teal {
            background-color: #008080;
        }

        .btn-teal:hover {
            background-color: #006666;
        }

        .badge {
            opacity: 0.95;
        }
    </style>
@endpush
