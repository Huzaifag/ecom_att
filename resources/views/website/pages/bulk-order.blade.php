@extends('website.layout.main')

@push('styles')
<style>
    :root {
        /* Teal color sampled from the "Place Order" button */
        --brand-color: #008989;
        --input-bg: #f9f9f9;
        --input-border: #f0f0f0;
    }

    body {
        background-color: #ffffff;
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
        color: #333;
    }

    /* Header Styling */
    h2.page-title {
        font-weight: 700;
        margin-bottom: 0.5rem;
        color: #000;
    }

    .page-subtitle {
        color: #555;
        font-size: 0.95rem;
        margin-bottom: 3rem;
    }

    /* Image Styling */
    .hero-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 20px;
        /* Matches the tall aspect ratio in the mockup */
        min-height: 550px;
    }

    /* Form Styling */
    label.form-label {
        font-weight: 600;
        font-size: 0.9rem;
        margin-bottom: 8px;
        color: #222;
    }

    .required-star {
        color: #dc3545; /* Bootstrap danger red */
    }

    /* Custom Input Styling to match the grey rounded look */
    .form-control {
        background-color: var(--input-bg);
        border: 1px solid var(--input-border);
        border-radius: 8px;
        padding: 12px 15px;
        font-size: 0.9rem;
        color: #495057;
    }

    .form-control::placeholder {
        color: #adb5bd;
        font-size: 0.85rem;
    }

    .form-control:focus {
        background-color: #fff;
        border-color: var(--brand-color);
        box-shadow: 0 0 0 0.25rem rgba(0, 137, 137, 0.1);
    }

    /* Textarea specific height */
    textarea.form-control {
        resize: none;
        height: 100px;
    }

    /* Button Styling */
    .btn-brand {
        background-color: var(--brand-color);
        border-color: var(--brand-color);
        color: white;
        padding: 10px 30px;
        border-radius: 6px;
        font-weight: 500;
        font-size: 0.9rem;
        margin-top: 10px;
        transition: all 0.3s;
    }

    .btn-brand:hover {
        background-color: #006666;
        border-color: #006666;
        color: white;
    }

    /* Responsive spacing adjustments */
    @media (max-width: 991px) {
        .hero-image {
            min-height: 300px;
            margin-bottom: 30px;
        }
    }
</style>
@endpush

@section('content')

<div class="container py-5">
    
    <div class="row justify-content-center text-center">
        <div class="col-12">
            <h2 class="page-title">Bulk Order</h2>
            <p class="page-subtitle">Please enter the payment details place an order</p>
        </div>
    </div>

    <div class="row gx-5 align-items-start">
        
        <div class="col-lg-5">
            <img src="https://images.unsplash.com/photo-1523381210434-271e8be1f52b?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                 alt="Clothes Rack" 
                 class="hero-image shadow-sm">
        </div>

        <div class="col-lg-7">
            <form>
                <div class="row g-3">
                    
                    <div class="col-md-6">
                        <label class="form-label">Full Name <span class="required-star">*</span></label>
                        <input type="text" class="form-control" placeholder="Enter your name">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Email <span class="required-star">*</span></label>
                        <input type="email" class="form-control" placeholder="Enter your email">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Phone Number <span class="required-star">*</span></label>
                        <input type="text" class="form-control" placeholder="Enter your number">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Address <span class="required-star">*</span></label>
                        <input type="text" class="form-control" placeholder="Enter your address">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Product Name/Code <span class="required-star">*</span></label>
                        <input type="text" class="form-control" placeholder="Enter number">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Product Qty <span class="required-star">*</span></label>
                        <input type="text" class="form-control" placeholder="Enter number">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Fabric Gsm <span class="required-star">*</span></label>
                        <input type="text" class="form-control" placeholder="Enter fabric">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Fabric Color <span class="required-star">*</span></label>
                        <input type="text" class="form-control" placeholder="Enter color">
                    </div>

                    <div class="col-12">
                        <label class="form-label">Additional Notes</label>
                        <textarea class="form-control"></textarea>
                    </div>

                    <div class="col-12">
                        <button type="button" class="btn btn-brand">Place Order</button>
                    </div>

                </div>
            </form>
        </div>
@endsection