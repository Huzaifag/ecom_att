<div class="container my-5">
    <h2 class="mb-4 fw-bold text-dark">{{ $title ?? 'Shop By Category' }}</h2>

    <!-- Animated scrolling container -->
    <div class="category-scroll-container">
        <div class="category-scroll-track">
            @foreach ($categories as $category)
                <div class="category-item">
                    <a href="" class="text-decoration-none text-dark d-flex justify-content-center flex-column align-items-center">
                        <div class="category-image">
                            <img src="{{ asset('images/website/categories/' . $category['image']) }}"
                                class="rounded-circle object-fit-cover" height="91" width="91"
                                alt="{{ $category['name'] }}" loading="lazy">
                        </div>
                        <p class="category-name">
                            {{ $category['name'] }}
                        </p>
                    </a>
                </div>
            @endforeach
            <!-- Duplicate items for seamless loop -->
            @foreach ($categories as $category)
                <div class="category-item">
                    <a href="" class="text-decoration-none text-dark d-flex justify-content-center flex-column align-items-center">
                        <div class="category-image">
                            <img src="{{ asset('images/website/categories/' . $category['image']) }}"
                                class="rounded-circle object-fit-cover" height="91" width="91"
                                alt="{{ $category['name'] }}" loading="lazy">
                        </div>
                        <p class="category-name">
                            {{ $category['name'] }}
                        </p>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>

@push('styles')
    <style>
        .category-scroll-container {
            overflow: hidden;
            width: 100%;
            position: relative;
        }

        .category-scroll-track {
            display: flex;
            animation: scroll-left 20s linear infinite;
            gap: 2rem;
            width: fit-content;
        }

        .category-item {
            flex-shrink: 0;
            text-align: center;
            min-width: 120px;
        }

        .category-image {
            width: 91px;
            height: 91px;
            overflow: hidden;
            border: 2px solid #008B8B;
            border-radius: 50%;
            padding: 1px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto;
            transition: all 0.3s ease;
        }

        .category-name {
            margin-top: 0.5rem;
            margin-bottom: 0;
            font-weight: 500;
            font-size: 0.9rem;
        }

        .category-item a:hover .category-image {
            transform: scale(1.05);
            border-color: #006666;
        }

        .category-item a:hover .category-image img {
            opacity: 0.9;
        }

        /* Pause animation on hover */
        .category-scroll-container:hover .category-scroll-track {
            animation-play-state: paused;
        }

        @keyframes scroll-left {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(-50%);
            }
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .category-scroll-track {
                gap: 1.5rem;
                animation-duration: 15s;
            }
            
            .category-item {
                min-width: 100px;
            }
            
            .category-image {
                width: 75px;
                height: 75px;
            }
            
            .category-image img {
                width: 75px;
                height: 75px;
            }
        }
    </style>
@endpush