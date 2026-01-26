@extends('website.layout.main')

@push('styles')
<style>
    :root {
        --text-dark: #253D4E;
        --text-muted: #7e7e7e;
    }

    .store-location-section {
        padding: 80px 0;
        text-align: center;
    }

    .store-title {
        font-weight: 700;
        color: var(--text-dark);
        margin-bottom: 40px;
        font-size: 24px;
    }

    /* --- Map Container Styling --- */
    .map-wrapper {
        position: relative;
        width: 100%;
        max-width: 1000px;
        margin: 0 auto 30px;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        /* Ratio to match the image aspect */
        aspect-ratio: 16 / 8; 
    }

    .map-wrapper iframe {
        width: 100%;
        height: 100%;
        border: none;
    }

    /* --- Address Styling --- */
    .address-box {
        margin-top: 20px;
    }

    .address-label {
        font-weight: 700;
        color: var(--text-dark);
        display: block;
        margin-bottom: 5px;
        font-size: 14px;
    }

    .address-text {
        color: #555;
        font-size: 14px;
        line-height: 1.6;
    }

    @media (max-width: 768px) {
        .map-wrapper {
            aspect-ratio: 1 / 1; /* Square on mobile for better visibility */
        }
    }
</style>
@endpush

@section('content')

<section class="store-location-section">
    <div class="container">
        <h2 class="store-title">Our Store Location</h2>

        <div class="map-wrapper">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58459.13962635924!2d90.37841198642398!3d23.7225725656123!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b850428d09f3%3A0xc3b6925920a23e5a!2sGulistan%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1700000000000!5m2!1sen!2sbd" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>

        <div class="address-box">
            <span class="address-label">Address: softstyle fashion Ltd.</span>
            <p class="address-text">Shop No. 10, Gulistan, Dhaka-1000, Bangladesh</p>
        </div>
    </div>
</section>

<section class="newsletter">
    @include('website.component.newsletter')
</section>

@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        // You can add logic here to switch coordinates if you have multiple stores
    });
</script>
@endpush