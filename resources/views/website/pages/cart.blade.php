@extends('website.layout.main')
@section('content')
    <div class="container">
        <div class="breadcrumb">
            Home > Cart
        </div>
        <h1>Shopping Cart</h1>
        <div class="alert">
            Please enter the details of your request. A member of our support staff will respond as soon as possible.
        </div>
        <div class="cart-content">
            <div class="cart-items">
                <strong>Shopping cart (2 items)</strong>
                <div class="cart-item">
                    <img src="{{ asset('/images/website/products/product.png') }}" alt="T-shirt">
                    <div class="item-details">
                        <div class="item-title">Men's Premium Blank T-shirt-green | Organic Ring-spun Combed Compact Cotton
                            | 100% Cotton Basic T-Shirt Combo Pack</div>
                        <div class="item-options">Color: Green</div>
                        <div class="item-price">₨749.99</div>
                    </div>
                </div>
                <div class="cart-item">
                    <img src="{{ asset('/images/website/products/product.png') }}" alt="T-shirt">
                    <div class="item-details">
                        <div class="item-title">Men's Premium Blank T-shirt-green | Organic Ring-spun Combed Compact Cotton
                            | 100% Cotton Basic T-Shirt Combo Pack</div>
                        <div class="item-options">Color: Green</div>
                        <div class="item-price">₨749.99</div>
                    </div>
                </div>
                <a href="#" class="remove-link">Remove</a>
            </div>
            <div class="order-summary">
                <div class="summary-title">Order Summary</div>
                <div class="promo-input">
                    <input type="text" placeholder="Enter Promo Code">
                    <button>Apply</button>
                </div>
                <div class="summary-row subtotal">
                    <span>Subtotal</span>
                    <span>₨1,749.98</span>
                </div>
                <div class="summary-row discount">
                    <span>Discount (-10%)</span>
                    <span>-₨149.99</span>
                </div>
                <div class="summary-row">
                    <span>Delivery Fee</span>
                    <span>₨0.00</span>
                </div>
                <div class="summary-row total">
                    <span>Total</span>
                    <span>₨1,449.99</span>
                </div>
                {{-- <button class="checkout-btn">
                    <span>Go To Checkout</span>
                    <span>→</span>
                </button> --}}

                <a href="{{ url('/checkout') }}" style="text-decoration: none" class="checkout-btn">
                    <span>Go To Checkout</span>
                    <span>→</span>
                </a>
            </div>
        </div>
    </div>


    <section class="top-rated-products container-fluid mb-4">
        <x-website.top-rated-products title="Related Products" />
    </section>
@endsection

@push('styles')
    <style>
        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .breadcrumb {
            margin-bottom: 20px;
            font-size: 14px;
        }

        .breadcrumb a {
            color: #007bff;
            text-decoration: none;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .alert {
            text-align: center;
            color: #008B8B;
            margin-bottom: 30px;
            font-size: 14px;
        }

        .cart-content {
            display: flex;
            gap: 40px;
            flex-wrap: wrap;
        }

        .cart-items {
            flex: 2;
            min-width: 300px;
        }

        .order-summary {
            flex: 1;
            min-width: 300px;
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .cart-item {
            display: flex;
            margin-bottom: 20px;
            padding-bottom: 20px;
            border-bottom: 1px solid #eee;
        }

        .cart-item img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            margin-right: 20px;
            border-radius: 4px;
        }

        .item-details {
            flex: 1;
        }

        .item-title {
            font-size: 14px;
            color: #333;
            margin-bottom: 5px;
        }

        .item-options {
            font-size: 12px;
            color: #666;
            margin-bottom: 10px;
        }

        .item-price {
            font-size: 18px;
            color: #e74c3c;
            font-weight: bold;
        }

        .remove-link {
            color: #e74c3c;
            text-decoration: none;
            font-size: 14px;
        }

        .summary-title {
            font-size: 18px;
            margin-bottom: 20px;
        }

        .summary-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
            font-size: 14px;
        }

        .subtotal {
            color: #666;
        }

        .discount {
            color: #e74c3c;
        }

        .total {
            font-size: 18px;
            font-weight: bold;
            color: #008B8B;
            border-top: 1px solid #eee;
            padding-top: 10px;
        }

        .promo-input {
            display: flex;
            margin-bottom: 20px;
        }

        .promo-input input {
            flex: 1;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px 0 0 4px;
        }

        .promo-input button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 0 4px 4px 0;
            cursor: pointer;
        }

        .checkout-btn {
            width: 100%;
            padding: 15px;
            background-color: #008B8B;
            color: #fff;
            font-size: 18px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .checkout-btn span:first-child {
            flex: 1;
            text-align: center;
        }
    </style>
@endpush