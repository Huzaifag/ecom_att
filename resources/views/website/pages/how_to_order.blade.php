@extends('website.layout.main')

@push('styles')
<style>
    /* Page Title */
    .page-title {
        text-align: center;
        font-weight: 600;
        font-size: 1.5rem;
        margin-bottom: 1.5rem;
        color: #000;
    }

    /* Section Subtitle */
    .section-subtitle {
        font-weight: 600;
        font-size: 1.1rem;
        margin-top: 2rem;
        margin-bottom: 1rem;
        color: #222;
    }

    /* Video Container Styling */
    .video-card {
        position: relative;
        border-radius: 12px;
        overflow: hidden;
        cursor: pointer;
        width: 100%;
        background-color: #000; /* Fallback */
    }

    /* Aspect Ratio for images */
    .video-card img {
        width: 100%;
        height: auto;
        display: block;
        object-fit: cover;
        transition: opacity 0.3s ease;
    }

    /* Dark overlay on hover */
    .video-card:hover img {
        opacity: 0.8;
    }

    /* Play Button Overlay */
    .play-button {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 60px;
        height: 60px;
        background-color: rgba(0, 0, 0, 0.4);
        border: 2px solid rgba(255, 255, 255, 0.6);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: transform 0.2s ease, background-color 0.2s;
    }

    /* Play Icon Triangle */
    .play-button::after {
        content: '';
        display: block;
        width: 0;
        height: 0;
        border-style: solid;
        border-width: 8px 0 8px 14px;
        border-color: transparent transparent transparent #fff;
        margin-left: 4px; /* Optical adjustment */
    }

    /* Hover effect for play button */
    .video-card:hover .play-button {
        background-color: rgba(0, 0, 0, 0.7);
        transform: translate(-50%, -50%) scale(1.1);
    }

    /* Small Video Grid Specifics */
    .small-video .play-button {
        width: 40px;
        height: 40px;
    }
    
    .small-video .play-button::after {
        border-width: 6px 0 6px 10px;
        margin-left: 3px;
    }

    /* Custom aspect ratio handling for consistent height if images vary */
    .aspect-video-main {
        aspect-ratio: 16 / 7;
    }
    
    .aspect-video-small {
        aspect-ratio: 16 / 9;
    }
</style>
@endpush

@section('content')

<div class="container py-5">
    
    {{-- Page Heading --}}
    <h2 class="page-title">How To Order</h2>

    {{-- Main Featured Video --}}
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="video-card aspect-video-main shadow-sm">
                <img src="{{ asset('images/website/video-banner.png') }}" 
                     alt="How To Order Main Video" class="img-fluid w-100 h-100">
                
                <div class="play-button"></div>
            </div>
        </div>
    </div>

    {{-- Sub Heading --}}
    <div class="row">
        <div class="col-12">
            <h4 class="section-subtitle">Watch All Videos</h4>
        </div>
    </div>

    {{-- Video Grid (3 Columns) --}}
    <div class="row g-3"> {{-- g-3 adds gap between columns --}}
        
        {{-- Loop for 6 items to match design --}}
        @for($i = 0; $i < 6; $i++)
        <div class="col-md-4 col-sm-6">
            <div class="video-card small-video aspect-video-small shadow-sm">
                <img src="{{ asset('images/website/video-banner.png') }}" 
                     alt="Video Thumbnail" class="img-fluid w-100 h-100">
                <div class="play-button"></div>
            </div>
        </div>
        @endfor

    </div>

</div>

<section class="newsletter">
    @include('website.component.newsletter')
</section>

@endsection

@push('scripts')
<script>
    // Optional: Add click handler if you want these to open a modal
    document.querySelectorAll('.video-card').forEach(card => {
        card.addEventListener('click', function() {
            console.log('Video clicked');
            // Add logic here to open a video modal (e.g., Bootstrap Modal)
        });
    });
</script>
@endpush