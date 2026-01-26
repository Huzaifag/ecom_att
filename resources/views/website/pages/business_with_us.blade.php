@extends('website.layout.main')

@push('styles')
    <style>
        /* Custom Styles for this section */
        .business-section {
            padding-top: 50px;
            padding-bottom: 50px;
        }

        .business-title {
            font-weight: 700;
            /* Bold title */
            margin-bottom: 15px;
            color: #212529;
        }

        .business-subtitle {
            color: #555;
            font-size: 1.1rem;
            line-height: 1.6;
            margin-bottom: 40px;
        }

        .ideal-for-title {
            font-weight: 700;
            margin-bottom: 20px;
            color: #333;
        }

        /* Styling the List */
        .custom-check-list li {
            margin-bottom: 12px;
            display: flex;
            align-items: center;
            /* Vertically align icon and text */
            font-size: 1rem;
            color: #444;
        }

        /* The Checkmark Icon Style */
        .check-icon {
            width: 20px;
            height: 20px;
            fill: #009688;
            /* The teal color from your image */
            margin-right: 12px;
            /* Space between icon and text */
            flex-shrink: 0;
            /* Prevents icon from squishing on small screens */
        }

        .warehouse-img {
            border-radius: 12px;
            /* Rounded corners for the image */
            object-fit: cover;
            width: 100%;
            height: auto;
        }

        /* Specific styles for the Contact Button area */
        .cta-text {
            font-size: 1.2rem;
            color: #333;
            margin-bottom: 20px;
            font-weight: 500;
        }

        .btn-contact-outline {
            border: 1px solid #009688;
            /* Teal border */
            background-color: transparent;
            color: #212529;
            padding: 10px 40px;
            border-radius: 6px;
            text-decoration: none;
            transition: all 0.3s ease;
            font-weight: 500;
            display: inline-block;
        }

        .btn-contact-outline:hover {
            background-color: #009688;
            color: #fff;
        }
    </style>
@endpush

@section('content')
    <section class="container-fluid padding-x-80 business-section">

        {{-- Header Section --}}
        <div class="row justify-content-center text-center">
            <div class="col-lg-8">
                <h2 class="business-title">Business With Us</h2>
                <div class="business-subtitle">
                    <p class="m-0">Looking for a reliable and quality fashion supplier for your business?</p>
                    <p class="m-0">SOFTSTYLE offers great partnership and wholesale opportunities.</p>
                </div>
            </div>
        </div>

        {{-- Content Section --}}
        <div class="row align-items-center mt-3">

            {{-- Left Column: Image --}}
            <div class="col-md-6 mb-4 mb-md-0">
                {{-- Replace 'your-image-url.jpg' with your actual image path --}}
                <img src="{{ asset('images/website/business_with_us_1.jpg') }}" alt="Warehouse workers"
                    class="img-fluid warehouse-img shadow-sm">
            </div>

            {{-- Right Column: List --}}
            <div class="col-md-6 ps-md-5"> {{-- ps-md-5 adds padding on the left on desktop screens --}}
                <h4 class="ideal-for-title">Our Business is Ideal for</h4>

                <ul class="list-unstyled custom-check-list">
                    <li>
                        @include('website.component.check-icon')
                        <span class="ms-2">Wholesalers and retailers</span>
                    </li>
                    <li>
                        @include('website.component.check-icon')
                        <span class="ms-2">Fashion store owners</span>
                    </li>
                    <li>
                        @include('website.component.check-icon')
                        <span class="ms-2">Online resellers/Facebook sellers</span>
                    </li>
                    <li>
                        @include('website.component.check-icon')
                        <span class="ms-2">Corporate gifting/events</span>
                    </li>
                    <li>
                        @include('website.component.check-icon')
                        <span class="ms-2">Schools, colleges, clubs for uniforms/special orders</span>
                    </li>
                </ul>
            </div>
        </div>

    </section>

    <section class="container-fluid">
        <div class="row align-items-center justify-content-center mt-3" style="background-color: #EFEFEF; padding: 20px;">


            {{-- left Column: List --}}
            <div class="col-md-4 ps-md-5"> {{-- ps-md-5 adds padding on the left on desktop screens --}}
                <h4 class="ideal-for-title">Our Business is Ideal for</h4>

                <ul class="list-unstyled custom-check-list">
                    <li>
                        @include('website.component.check-icon')
                        <span class="ms-2">Wholesalers and retailers</span>
                    </li>
                    <li>
                        @include('website.component.check-icon')
                        <span class="ms-2">Fashion store owners</span>
                    </li>
                    <li>
                        @include('website.component.check-icon')
                        <span class="ms-2">Online resellers/Facebook sellers</span>
                    </li>
                    <li>
                        @include('website.component.check-icon')
                        <span class="ms-2">Corporate gifting/events</span>
                    </li>
                    <li>
                        @include('website.component.check-icon')
                        <span class="ms-2">Schools, colleges, clubs for uniforms/special orders</span>
                    </li>
                </ul>
            </div>

            {{-- Right Column: Image --}}
            <div class="col-md-4 mb-4 mb-md-0">
                {{-- Replace 'your-image-url.jpg' with your actual image path --}}
                <img src="{{ asset('images/website/business_with_us_1.jpg') }}" alt="Warehouse workers"
                    class="img-fluid warehouse-img shadow-sm">
            </div>


        </div>
    </section>

    <section class="container-fluid padding-x-80 business-section">
        {{-- Content Row --}}
        <div class="row align-items-center mt-3">

            {{-- Left Column: Image --}}
            <div class="col-md-6 mb-4 mb-md-0">
                {{-- Placeholder for the laptop/QR image --}}
                <img src="{{ asset('images/website/business_with_us_2.jpg') }}"
                    alt="Online Business Agreement" class="img-fluid warehouse-img shadow-sm" style="border-radius: 12px;">
            </div>

            {{-- Right Column: List --}}
            <div class="col-md-6 ps-md-5">
                <h4 class="ideal-for-title">Agreement Terms</h4>

                <ul class="list-unstyled custom-check-list">
                    <li>
                        @include('website.component.check-icon')
                        <span class="ms-2">Minimum Order Quantity (MOQ) required</span>
                    </li>
                    <li>
                        @include('website.component.check-icon')
                        <span class="ms-2">Advance/Partial Payment</span>
                    </li>
                    <li>
                        @include('website.component.check-icon')
                        <span class="ms-2">Branded & Unbranded options</span>
                    </li>
                    <li>
                        @include('website.component.check-icon')
                        <span class="ms-2">Dealership by region (upon discussion)</span>
                    </li>
                </ul>
            </div>
        </div>

        {{-- Bottom CTA Section --}}
        <div class="row mt-5 text-center">
            <div class="col-12">
                <p class="cta-text">If you're interested in doing business with us feel free to contact us</p>
                <a href="#" class="btn-contact-outline">
                    Contact Us
                </a>
            </div>
        </div>

    </section>

    <section class="newsletter">
        @include('website.component.newsletter')
    </section>
@endsection