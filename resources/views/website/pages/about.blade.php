@extends('website.layout.main')
@section('content')
<section class="about-section container-fluid padding-x-80 mt-3">
    <div class="row align-items-center">
        <div class="col-md-7">
            <h2 class="section-title">About Us</h2>
            <h3>SOFTSTYLE – Reflect Your Taste.</h3>
            <p class="section-subtitle">We believe fashion is not just about wearing clothes—it’s a reflection of
                personality, an expression of confidence, and a symbol of elegance. With this belief, SOFTSTYLE was born
                a modern, quality-driven, and trustworthy fashion brand.</p>
            <p class="section-text">Our journey began with the goal of making stylish and high-quality clothing
                accessible to the people of Bangladesh. Every garment is designed following international trends but
                priced affordably for the local market. We produce a wide range of t-shirts, hoodies, trousers, shirts,
                and seasonal wear for men, women, and children perfect for daily use, official occasions, or special
                moments.
                Our design team consistently brings new collections so that everyone finds their fashion statement in
                our offerings. Our skilled artisans and experienced workers in the production unit ensure the quality of
                each product.</p>

        </div>
        <div class="col-md-5" style="height: 100%">
            <img src="{{ asset('images/website/about-pic1.png') }}" alt="About Us" class="img-fluid w-100">
        </div>
    </div>
</section>

<section class="core-values-section py-5">
    <div class="container-fluid padding-x-80">
        <div class="core-values-card position-relative bg-teal text-white rounded-4 p-4 p-md-5 shadow-lg">
            <h2 class="text-center mb-5 fw-semibold fs-4">Our Core Values</h2>

            <div class="row g-4">
                <div class="col-lg-6">
                    <ul class="list-unstyled d-flex flex-wrap justify-content-center justify-content-lg-start gap-4">
                        <li class="d-flex align-items-center gap-3">
                            <i class="bi bi-check-circle-fill fs-4"></i>
                            <span>Commitment to quality</span>
                        </li>
                        <li class="d-flex align-items-center gap-3">
                            <i class="bi bi-check-circle-fill fs-4"></i>
                            <span>Customer satisfaction as the top priority</span>
                        </li>
                        <li class="d-flex align-items-center gap-3">
                            <i class="bi bi-check-circle-fill fs-4"></i>
                            <span>Trendy designs and innovation</span>
                        </li>
                        <li class="d-flex align-items-center gap-3">
                            <i class="bi bi-check-circle-fill fs-4"></i>
                            <span>Honest and transparent business practices</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row mt-5 justify-content-center">
            <div class="col-lg-5">
                <div class="mission-vision-card text-center text-md-start bg-white rounded-4 p-4 shadow">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <img src="{{ asset('images/icons/target-icon.svg') }}" alt="Our Mission" class="mission-icon">
                        <h3 class="fw-semibold mb-0">Our Mission</h3>
                    </div>
                    <p class="text-muted">
                        To become a trusted name in the local fashion market by offering quality and stylish clothing.
                    </p>
                </div>
            </div>

            <div class="col-lg-5 mt-4 mt-lg-0">
                <div class="mission-vision-card text-center text-md-start bg-white rounded-4 p-4 shadow">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <img src="{{ asset('images/icons/vision-icon.svg') }}" alt="Our Vision" class="mission-icon">
                        <h3 class="fw-semibold mb-0">Our Vision</h3>
                    </div>
                    <p class="text-muted">
                        To be one of the top fashion brands in Bangladesh and achieve global standards.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container py-5">
    <div class="row align-items-center px-4">
        <div class="col-lg-6 col-md-6">
            <img src="{{ asset('images/website/about-pic2.png') }}" alt="Business With Us" class="img-fluid w-100">
        </div>
        <div class="col-lg-6 col-md-6">
            <h2 class="mb-3">Business With Us</h2>
            <p class="mb-4">
                Looking for a reliable and quality fashion supplier for your business?
                SOFTSTYLE offers great partnership and wholesale opportunities.
            </p>

            <ul class="list-unstyled">
                <li class="mb-3">
                    <span class="text-white check-circle-fill me-2">✓</span>
                    Ideal for wholesalers and retailers
                </li>
                <li class="mb-3">
                    <span class="text-white check-circle-fill me-2">✓</span>
                    Perfect for fashion store owners
                </li>
                <li class="mb-3">
                    <span class="text-white check-circle-fill me-2">✓</span>
                    Our business is ideal for Wholesalers/Retailers
                </li>
                <li class="mb-4">
                    <span class="text-white check-circle-fill me-2">✓</span>
                    Schools, colleges, clubs for uniforms/special orders
                </li>
            </ul>

            <a href="#" class="btn btn-teal text-white px-4 py-2 rounded">Read More</a>
        </div>
    </div>
</section>

<section class="container py-5">
    <div class="row align-items-center px-4">
        <div class="col-lg-6 col-md-6">
            <h2 class="mb-3">Business With Us</h2>
            <p class="mb-4">
                Looking for a reliable and quality fashion supplier for your business?
                SOFTSTYLE offers great partnership and wholesale opportunities.
            </p>

            <ul class="list-unstyled">
                <li class="mb-3">
                    <span class="text-white check-circle-fill me-2">✓</span>
                    Ideal for wholesalers and retailers
                </li>
                <li class="mb-3">
                    <span class="text-white check-circle-fill me-2">✓</span>
                    Perfect for fashion store owners
                </li>
                <li class="mb-3">
                    <span class="text-white check-circle-fill me-2">✓</span>
                    Our business is ideal for Wholesalers/Retailers
                </li>
                <li class="mb-4">
                    <span class="text-white check-circle-fill me-2">✓</span>
                    Schools, colleges, clubs for uniforms/special orders
                </li>
            </ul>

            <a href="#" class="btn btn-teal text-white px-4 py-2 rounded">Read More</a>
        </div>

        <div class="col-lg-6 col-md-6">
            <img src="{{ asset('images/website/about-pic3.png') }}" alt="Business With Us" class="img-fluid w-100">
        </div>
    </div>
</section>


<section class="container py-5">
    <div class="row align-items-center px-4">
        <div class="col-lg-6 col-md-6">
            <img src="{{ asset('images/website/about-pic4.png') }}" alt="Business With Us" class="img-fluid w-100">
        </div>
        <div class="col-lg-6 col-md-6">
            <h2 class="mb-3">Business With Us</h2>
            <p class="mb-4">
                Looking for a reliable and quality fashion supplier for your business?
                SOFTSTYLE offers great partnership and wholesale opportunities.
            </p>

            <ul class="list-unstyled">
                <li class="mb-3">
                    <span class="text-white check-circle-fill me-2">✓</span>
                    Ideal for wholesalers and retailers
                </li>
                <li class="mb-3">
                    <span class="text-white check-circle-fill me-2">✓</span>
                    Perfect for fashion store owners
                </li>
                <li class="mb-3">
                    <span class="text-white check-circle-fill me-2">✓</span>
                    Our business is ideal for Wholesalers/Retailers
                </li>
                <li class="mb-4">
                    <span class="text-white check-circle-fill me-2">✓</span>
                    Schools, colleges, clubs for uniforms/special orders
                </li>
            </ul>

            <a href="#" class="btn btn-teal text-white px-4 py-2 rounded">Read More</a>
        </div>
    </div>
</section>

<section class="newsletter">
    @include('website.component.newsletter')
</section>
@endsection

@push('styles')
<style>
    .about-section h2 {
        font-weight: 600;
        font-size: 18px;
        color: #008B8B;
    }

    .btn-teal {
        background-color: #008B8B;
    }

    .about-section h3 {
        font-weight: 600;
        font-size: 28px;
        color: #000;
    }

    .about-section p {
        font-weight: 400;
        font-size: 16px;
        color: #008B8B;
    }

    .about-section img {
        border-radius: 8px;
        height: 100%;
        object-fit: cover;
    }

    /* Core Values Section Styles */
    .bg-teal {
        background-color: #008B8B;
    }

    .core-values-card ul li {
        font-size: 18px;
        min-width: 220px;
    }

    .core-values-card ul li i {
        flex-shrink: 0;
    }

    .mission-icon {
        width: 50px;
        height: 50px;
        object-fit: contain;
    }

    .mission-vision-card {
        min-height: 180px;
    }

    .mission-vision-card h3 {
        font-size: 22px;
        color: #008B8B;
    }

    .check-circle-fill {
        /* color: #17a2b8; */
        font-weight: bold;
        height: 20px;
        width: 20px;
        display: inline-block;
        text-align: center;
        border-radius: 50%;
        background-color: #008B8B;
    }

    .mission-vision-card p {
        font-size: 16px;
        line-height: 1.6;
    }

    @media (max-width: 991px) {
        .core-values-card ul {
            justify-content-center !important;
        }

        .core-values-card ul li {
            min-width: auto;
        }
    }

    .text-success {
        color: #17a2b8 !important;
        /* Matches the teal checkmark in the image */
        font-weight: bold;
    }

    .btn-info {
        background-color: #17a2b8;
        border: none;
    }

    .btn-info:hover {
        background-color: #138496;
    }
</style>
@endpush