<div class="product-card">
    <div class="product-image-container p-2">
        <img src="{{ asset('images/website/products/' . $product['image']) }}" alt="{{ $product['name'] }}"
            class="product-image">
    </div>

    <div class="product-info">
        <div class="product-rating">
            @for ($i = 1; $i <= 5; $i++)
                <span class="star {{ $i <= $product['rating'] ? 'filled' : '' }}">★</span>
            @endfor
            <span class="rating-count">({{ $product['rating_count'] ?? 0 }})</span>
        </div>

        <h3 class="product-name">{{ $product['name'] }}</h3>

        <div class="product-pricing">
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
                <i class="bi bi-bag"></i>Order Now
            </button>
        </div>
    </div>
</div>

@push('styles')
    <style>
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

        .product-info {
            padding: 20px;
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
            margin-bottom: 20px;
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

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .product-image-container {
                height: 220px;
            }

            .product-info {
                padding: 15px;
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
