@extends('website.layout.main')

@push('styles')
<style>
    /* --- Theme Variables --- */
    :root {
        --primary-teal: #3BB77E;
        --primary-hover: #2ea66d;
        --text-dark: #253D4E;
        --text-muted: #7e7e7e;
        --border-color: #ececec;
        --star-color: #FDC040;
        --danger-color: #fd6e6e;
    }

    body {
        background-color: #fff;
        color: var(--text-dark);
    }

    /* --- Wishlist Specific Styles --- */
    .wishlist-header {
        font-weight: 700;
        color: var(--text-dark);
        margin-bottom: 20px;
    }
    
    .wishlist-count {
        font-size: 16px;
        color: var(--text-muted);
        font-weight: 400;
        margin-left: 10px;
    }

    .wishlist-container {
        border: 1px solid var(--border-color);
        border-radius: 15px;
        padding: 0;
        background: #fff;
        overflow: hidden; /* Keeps children inside rounded corners */
    }

    .wishlist-item {
        padding: 20px 30px;
        border-bottom: 1px solid var(--border-color);
        transition: background-color 0.2s;
    }

    .wishlist-item:last-child {
        border-bottom: none;
    }

    .wishlist-item:hover {
        background-color: #fcfcfc;
    }

    .product-img-wrapper {
        border: 1px solid var(--border-color);
        border-radius: 10px;
        padding: 5px;
        width: 100px;
        height: 100px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .product-img {
        max-width: 100%;
        max-height: 100%;
        object-fit: contain;
        border-radius: 8px;
    }

    .product-title {
        font-weight: 700;
        font-size: 16px;
        color: var(--text-dark);
        margin-bottom: 4px;
        text-decoration: none;
        display: block;
    }

    .product-meta {
        font-size: 13px;
        color: var(--text-muted);
        margin-bottom: 8px;
    }

    .rating-wrapper {
        font-size: 12px;
        color: var(--text-muted);
        margin-bottom: 8px;
        display: flex;
        align-items: center;
        gap: 15px;
    }

    .stars i {
        color: var(--star-color);
        font-size: 12px;
    }

    .stock-status {
        color: var(--primary-teal);
        font-weight: 600;
    }

    .btn-remove {
        color: var(--danger-color);
        font-size: 14px;
        text-decoration: none;
        background: none;
        border: none;
        padding: 0;
        display: inline-flex;
        align-items: center;
        gap: 5px;
        cursor: pointer;
        transition: color 0.3s;
    }

    .btn-remove:hover {
        color: #d32f2f;
    }

    .price-tag {
        font-size: 20px;
        font-weight: 700;
        color: var(--primary-teal);
    }

    /* Custom Add to Cart Button */
    .btn-custom-outline {
        border: 1px solid var(--primary-teal);
        color: var(--text-dark);
        background: transparent;
        padding: 10px 20px;
        border-radius: 4px;
        font-weight: 600;
        font-size: 14px;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 8px;
    }

    .btn-custom-outline:hover {
        background-color: var(--primary-teal);
        color: #fff;
        border-color: var(--primary-teal);
    }
    
    /* Responsive Adjustments */
    @media (max-width: 768px) {
        .wishlist-item {
            text-align: center;
        }
        .product-img-wrapper {
            margin: 0 auto 15px auto;
        }
        .rating-wrapper {
            justify-content: center;
            flex-wrap: wrap;
            gap: 10px;
        }
        .price-tag {
            margin: 10px 0;
            display: block;
        }
        .action-col {
            margin-top: 10px;
        }
    }
</style>
@endpush

@section('content')

<div class="container my-5">
    
    <div class="d-flex align-items-baseline">
        <h2 class="wishlist-header">Wishlist</h2>
        <span class="wishlist-count" id="wishlist-counter">3 items</span>
    </div>

    <div class="wishlist-container shadow-sm">
        
        <div class="wishlist-item" id="item-1">
            <div class="row align-items-center">
                <div class="col-md-2 col-12">
                    <div class="product-img-wrapper">
                        <img src="https://via.placeholder.com/150/253D4E/FFFFFF?text=Polo" class="product-img" alt="Product">
                    </div>
                </div>
                
                <div class="col-md-6 col-12">
                    <a href="#" class="product-title">Men's Premium Blank T-shirt-green | Organic Ring spun</a>
                    <p class="product-meta">Combed Compact Cotton | 100% Cotton Basic T-Shirt Combo Pack</p>
                    
                    <div class="rating-wrapper">
                        <span class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <span class="text-muted ms-1">(738)</span>
                        </span>
                        <span>Availability: <span class="stock-status">In Stock</span></span>
                        <span>Views: 3000</span>
                    </div>

                    <button class="btn-remove" onclick="removeItem('item-1')">
                        <i class="far fa-trash-alt"></i> Remove
                    </button>
                </div>

                <div class="col-md-2 col-12 text-md-center">
                    <span class="price-tag">৳749.99</span>
                </div>

                <div class="col-md-2 col-12 text-md-end action-col">
                    <button class="btn btn-custom-outline btn-add-cart">
                        <i class="fas fa-shopping-cart"></i> Add To Cart
                    </button>
                </div>
            </div>
        </div>

        <div class="wishlist-item" id="item-2">
            <div class="row align-items-center">
                <div class="col-md-2 col-12">
                    <div class="product-img-wrapper">
                        <img src="https://via.placeholder.com/150/3BB77E/FFFFFF?text=Polo" class="product-img" alt="Product">
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <a href="#" class="product-title">Men's Premium Blank T-shirt-green | Organic Ring spun</a>
                    <p class="product-meta">Combed Compact Cotton | 100% Cotton Basic T-Shirt Combo Pack</p>
                    <div class="rating-wrapper">
                        <span class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <span class="text-muted ms-1">(738)</span>
                        </span>
                        <span>Availability: <span class="stock-status">In Stock</span></span>
                        <span>Views: 3000</span>
                    </div>
                    <button class="btn-remove" onclick="removeItem('item-2')">
                        <i class="far fa-trash-alt"></i> Remove
                    </button>
                </div>
                <div class="col-md-2 col-12 text-md-center">
                    <span class="price-tag">৳749.99</span>
                </div>
                <div class="col-md-2 col-12 text-md-end action-col">
                    <button class="btn btn-custom-outline btn-add-cart">
                        <i class="fas fa-shopping-cart"></i> Add To Cart
                    </button>
                </div>
            </div>
        </div>

        <div class="wishlist-item" id="item-3">
            <div class="row align-items-center">
                <div class="col-md-2 col-12">
                    <div class="product-img-wrapper">
                        <img src="https://via.placeholder.com/150/FDC040/FFFFFF?text=Polo" class="product-img" alt="Product">
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <a href="#" class="product-title">Men's Premium Blank T-shirt-green | Organic Ring spun</a>
                    <p class="product-meta">Combed Compact Cotton | 100% Cotton Basic T-Shirt Combo Pack</p>
                    <div class="rating-wrapper">
                        <span class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <span class="text-muted ms-1">(738)</span>
                        </span>
                        <span>Availability: <span class="stock-status">In Stock</span></span>
                        <span>Views: 3000</span>
                    </div>
                    <button class="btn-remove" onclick="removeItem('item-3')">
                        <i class="far fa-trash-alt"></i> Remove
                    </button>
                </div>
                <div class="col-md-2 col-12 text-md-center">
                    <span class="price-tag">৳749.99</span>
                </div>
                <div class="col-md-2 col-12 text-md-end action-col">
                    <button class="btn btn-custom-outline btn-add-cart">
                        <i class="fas fa-shopping-cart"></i> Add To Cart
                    </button>
                </div>
            </div>
        </div>

    </div>
</div>

<section class="newsletter">
    @include('website.component.newsletter')
</section>
@endsection

@push('scripts')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />

<script>
    // Remove Item Function
    function removeItem(id) {
        if(confirm('Are you sure you want to remove this item?')) {
            $('#' + id).fadeOut(300, function() { 
                $(this).remove(); 
                updateCounter(); 
            });
        }
    }

    // Update the "3 items" counter dynamically
    function updateCounter() {
        var count = $('.wishlist-item').length;
        $('#wishlist-counter').text(count + ' items');
        
        if(count === 0) {
            $('.wishlist-container').html('<div class="p-5 text-center text-muted">Your wishlist is empty.</div>');
        }
    }

    $(document).ready(function() {
        // Add to Cart Interaction
        $('.btn-add-cart').on('click', function() {
            var btn = $(this);
            var originalText = btn.html();
            
            // Simulate loading/success
            btn.prop('disabled', true).html('<i class="fas fa-spinner fa-spin"></i> Adding...');
            
            setTimeout(function() {
                btn.removeClass('btn-custom-outline').addClass('btn-success text-white')
                   .html('<i class="fas fa-check"></i> Added');
                
                // Reset button after 2 seconds
                setTimeout(function() {
                    btn.removeClass('btn-success text-white').addClass('btn-custom-outline')
                       .html(originalText).prop('disabled', false);
                }, 2000);
            }, 800);
        });
    });
</script>
@endpush