<div class="container my-5">
    <h2 class="mb-4 fw-bold text-dark">{{ $title }}</h2>

    @if(count($products) > 0)
        <!-- Static Grid Layout -->
        <div class="row g-4 mb-4">
            @foreach ($products as $product)
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <x-website.product-card :product="$product" />
                </div>
            @endforeach
        </div>

        <!-- View All Products Button -->
        @if($showViewAllButton)
            <div class="text-center mt-4">
                @if($viewAllLink)
                    <a href="{{ $viewAllLink }}" class="btn-view-all">
                        {{ $viewAllText }}
                    </a>
                @else
                    <button class="btn-view-all">
                        {{ $viewAllText }}
                    </button>
                @endif
            </div>
        @endif
    @else
        <div class="text-center py-5">
            <p class="text-muted">No products available at the moment.</p>
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