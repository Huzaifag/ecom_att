<div class="container my-5">
    <h2 class="mb-4 fw-bold text-center text-white">{{ $title }}</h2>

    @if (count($products) > 0)
        <!-- Slider Wrapper -->
        <div class="position-relative">
            <!-- Previous Button -->
            <button class="slider-prev" aria-label="Previous">
                <
            </button>

            <!-- Next Button -->
            <button class="slider-next" aria-label="Next">
                >
            </button>

            <!-- Slider Container -->
            <div class="slider-overflow">
                <div class="row g-4 slider-track">
                    @foreach ($products as $product)
                        <div class="col-lg-3 col-md-4 col-sm-6 slider-item">
                            <div class="product-card">
                                <div class="product-image-container p-2">
                                    <img src="{{ asset('images/website/products/' . $product['image']) }}"
                                        alt="{{ $product['name'] }}" class="product-image">
                                </div>

                                <div class="product-slider-info">
                                    <div class="product-rating">
                                        @for ($i = 1; $i <= 5; $i++)
                                            <span class="star {{ $i <= $product['rating'] ? 'filled' : '' }}">★</span>
                                        @endfor
                                        <span class="rating-count">({{ $product['rating_count'] ?? 0 }})</span>
                                    </div>

                                    <h3 class="product-name">{{ $product['name'] }}</h3>

                                    <div class="product-slider-pricing">
                                        @if (isset($product['original_price']) && $product['original_price'] > $product['price'])
                                            <span class="original-price">৳{{ number_format($product['original_price'], 2) }}</span>
                                        @endif
                                        <span class="current-price">৳{{ number_format($product['price'], 2) }}</span>
                                    </div>

                                    <div class="product-actions">
                                        <button class="btn-add-cart">
                                            <i class="bi bi-cart3"></i> Add To Cart
                                        </button>
                                        <button class="btn-order-now">
                                            <i class="bi bi-bag"></i> Order Now
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif
</div>

@push('styles')
    <style>
        .btn-view-all {
            background: #008B8B;
            color: white;
            border: none;
            padding: 16px 30px;
            border-radius: 12px;
            font-weight: 600;
            font-size: 14px;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            text-decoration: none;
            display: inline-block;
        }

        .btn-view-all:hover {
            background: #006666;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 139, 139, 0.3);
            color: white;
            text-decoration: none;
        }
    </style>
@endpush

@push('styles')
    <style>
        .featured-products{
            min-height: 600px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .product-card {
            background: white;
            border-radius: 16px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            overflow: hidden;
            transition: all 0.3s ease;
            height: 100%;
            display: flex;
            flex-direction: column;
            border: 1px solid #f0f0f0;
        }

        .product-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.15);
        }

        .product-image-container {
            position: relative;
            height: 280px;
            overflow: hidden;
            background: #ffffff;
            border-radius: 2px;
        }

        .product-image {
            width: 100%;
            height: 100%;
            /* object-fit: cover; */
            transition: transform 0.3s ease;
            border-radius: 2px;
        }

        .product-card:hover .product-image {
            transform: scale(1.05);
        }

        .brand-logo {
            position: absolute;
            top: 15px;
            left: 15px;
            background: rgba(255, 255, 255, 0.95);
            padding: 8px 12px;
            border-radius: 8px;
            backdrop-filter: blur(10px);
            font-weight: 700;
            font-size: 14px;
            color: #333;
            line-height: 1;
        }

        .brand-subtitle {
            display: block;
            font-size: 10px;
            font-weight: 400;
            color: #666;
            margin-top: 2px;
        }

        .product-slider-info {
            padding: 10px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .product-rating {
            display: flex;
            align-items: center;
            gap: 2px;
            margin-bottom: 12px;
        }

        .star {
            color: #ddd;
            font-size: 16px;
        }

        .star.filled {
            color: #FF6B35;
        }

        .rating-count {
            font-size: 14px;
            color: #999;
            margin-left: 8px;
            font-weight: 500;
        }

        .product-name {
            font-size: 16px;
            font-weight: 600;
            color: #333;
            margin-bottom: 15px;
            line-height: 1.4;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .product-pricing {
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .original-price {
            text-decoration: line-through;
            color: #999;
            font-size: 14px;
        }

        .current-price {
            font-weight: 700;
            font-size: 20px;
            color: #333;
        }

        .product-actions {
            display: flex;
            gap: 10px;
            margin-top: auto;
        }

        .product-actions button {
            flex: 1;
            padding: 12px 16px;
            border: 1px solid #008B8B;
            border-radius: 8px;
            font-size: 11px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }

        .btn-add-cart {
            width: 130px;
            height: 27px;
            background: white;
            font-size: 11px;
        }

        .btn-order-now {
            width: 130px;
            height: 27px;
            background: white;
            font-size: 11px;
        }

        .product-actions i {
            font-size: 14px;
        }

        /* Slider specific styles */
        .slider-overflow {
            overflow: hidden;
        }

        .slider-track {
            display: flex;
            transition: transform 0.5s ease;
        }

        .slider-item {
            flex: 0 0 auto;
            min-width: 100%; /* Mobile: 1 item */
        }

        @media (min-width: 576px) {
            .slider-item {
                min-width: 50%; /* Small devices: 2 items */
            }
        }

        @media (min-width: 768px) {
            .slider-item {
                min-width: 33.333%; /* Medium: 3 items */
            }
        }

        @media (min-width: 992px) {
            .slider-item {
                min-width: 25%; /* Large: 4 items visible like in the image */
            }
        }

        .slider-prev,
        .slider-next {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.8);
            border: none;
            border-radius: 50%;
            font-size: 24px;
            color: #008B8B;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            z-index: 10;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .slider-prev:hover,
        .slider-next:hover {
            background: white;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .slider-prev {
            left: -75px;
        }

        .slider-next {
            right: -75px;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .product-image-container {
                height: 220px;
            }

            .product-name {
                font-size: 14px;
            }

            .current-price {
                font-size: 18px;
            }

            .product-actions button {
                padding: 10px 12px;
                font-size: 12px;
            }
        }
    </style>
@endpush

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const track = document.querySelector('.slider-track');
            const items = document.querySelectorAll('.slider-item');
            const prevBtn = document.querySelector('.slider-prev');
            const nextBtn = document.querySelector('.slider-next');

            if (!track || items.length === 0) return;

            let currentIndex = 0;
            const totalItems = items.length;

            function updateSlider() {
                const itemWidth = items[0].offsetWidth + parseInt(getComputedStyle(document.documentElement).getPropertyValue('--bs-gutter-x') || 16) * 2; // approx gap
                track.style.transform = `translateX(-${currentIndex * itemWidth}px)`;
            }

            nextBtn.addEventListener('click', function () {
                if (currentIndex < totalItems - 1) {
                    currentIndex++;
                    updateSlider();
                }
            });

            prevBtn.addEventListener('click', function () {
                if (currentIndex > 0) {
                    currentIndex--;
                    updateSlider();
                }
            });

            // Recalculate on resize
            window.addEventListener('resize', updateSlider);
        });
    </script>
@endpush