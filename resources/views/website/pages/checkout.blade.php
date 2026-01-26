@extends('website.layout.main')

@push('styles')
<style>
    /* --- Custom Styles to Match Mockup --- */
    :root {
        --brand-color: #008080; /* Teal color from image */
        --brand-color-light: #e6f2f2;
        --text-muted: #6c757d;
    }

    body {
        background-color: #f8f9fa;
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
    }

    h2 { font-weight: 700; }
    .text-brand { color: var(--brand-color); }
    .breadcrumb { font-size: 0.9rem; color: var(--text-muted); }

    /* Custom Card-Style Radio Buttons */
    .custom-radio-card {
        position: relative;
        border: 1px solid #dee2e6;
        border-radius: 8px;
        padding: 15px;
        cursor: pointer;
        transition: all 0.2s;
        background: #fff;
        display: flex;
        align-items: center;
    }

    /* Hide default radio input */
    .custom-radio-card input[type="radio"] {
        position: absolute;
        opacity: 0;
        cursor: pointer;
        height: 0;
        width: 0;
    }

    /* Custom Checkmark Circle */
    .checkmark-circle {
        height: 20px;
        width: 20px;
        background-color: #fff;
        border: 2px solid #adb5bd;
        border-radius: 50%;
        margin-right: 15px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    /* Inner dot for checkmark */
    .checkmark-circle::after {
        content: "";
        width: 10px;
        height: 10px;
        background: var(--brand-color);
        border-radius: 50%;
        display: none;
    }

    /* Styling when radio is checked */
    .custom-radio-card input[type="radio"]:checked ~ .checkmark-circle {
        border-color: var(--brand-color);
    }
    
    .custom-radio-card input[type="radio"]:checked ~ .checkmark-circle::after {
        display: block;
    }

    .custom-radio-card input[type="radio"]:checked ~ .card-content {
        color: black;
    }
    
    /* The specific border style for selected items */
    .custom-radio-card.selected {
        border: 2px solid var(--brand-color);
        background-color: var(--brand-color-light);
    }

    /* Payment Method specific styling */
    .payment-option-card {
         border: 1px solid #dee2e6;
         border-radius: 8px;
         padding: 15px 20px;
         margin-bottom: 15px;
         cursor: pointer;
         display: flex;
         align-items: center;
         background: #fff;
    }
    
    /* Hide actual radio */
    .payment-option-card input { display: none; }

    /* Custom icon container for payment options */
    .payment-icon-box {
        margin-right: 15px;
        color: var(--text-muted);
    }

    /* Selected state for payment options */
    .payment-option-card.active {
        border: 2px solid var(--brand-color);
        background-color: var(--brand-color-light);
    }
    .payment-option-card.active .payment-icon-box {
        color: var(--brand-color);
    }
    
    /* Helper classes for content */
    .option-title { font-weight: 500; display: block;}
    .option-subtitle { font-size: 0.85rem; color: var(--text-muted); }

    /* Form Inputs rounded */
    .form-control {
        border-radius: 8px;
        padding: 12px;
        background-color: #f8f9fa;
        border: 1px solid #dee2e6;
    }
    .form-control:focus {
         background-color: #fff;
         box-shadow: none;
         border-color: var(--brand-color);
    }

    /* Mobile Payment List Styling */
    .mobile-payment-list {
        margin-left: 20px;
        margin-top: -10px;
        margin-bottom: 20px;
        border: 1px solid #eee;
        border-radius: 8px;
        background: #fff;
        padding: 10px 0;
    }
    .mobile-payment-item {
        display: flex;
        align-items: center;
        padding: 10px 20px;
        border-bottom: 1px solid #f0f0f0;
        cursor: pointer;
    }
    .mobile-payment-item:last-child { border-bottom: none; }
    .provider-icon {
        width: 30px; height: 30px;
        background: #eee; border-radius: 4px;
        margin-right: 15px;
        display: flex; align-items: center; justify-content: center;
        font-size: 10px; color: #666;
    }
    /* Simulating the red dot icons from the image */
    .provider-icon.bkash { background: #e2136e; color: white;}
    .provider-icon.nagad { background: #ec1c24; color: white;}

    /* Order Summary Box */
    .summary-card {
        background: #fff;
        padding: 25px;
        border-radius: 12px;
        border: 1px solid #dee2e6;
    }
    .summary-item {
        display: flex;
        justify-content: space-between;
        margin-bottom: 10px;
        font-size: 0.95rem;
    }
    .summary-total {
        border-top: 1px solid #dee2e6;
        padding-top: 15px;
        font-weight: 700;
        font-size: 1.1rem;
    }
    .btn-brand {
        background-color: var(--brand-color);
        border-color: var(--brand-color);
        color: white;
        padding: 12px;
        font-weight: 600;
        border-radius: 8px;
    }
    .btn-brand:hover { background-color: #006666; color: white; }
    
    .btn-apply {
         border-color: var(--brand-color);
         color: var(--brand-color);
         font-weight: 600;
    }

    /* Helper to hide dynamic sections initially */
    .hidden-section {
        display: none;
    }
</style>
@endpush

@section('content')

<div class="container py-5">
    <div class="row mb-4">
        <div class="col-12 text-center">
            <div class="breadcrumb justify-content-center mb-2">
                Home &nbsp; > &nbsp; Cart &nbsp; > &nbsp; <span class="text-dark">Checkout</span>
            </div>
            <h2>Checkout</h2>
            <p class="text-muted">Please enter the details to checkout and place an order</p>
        </div>
    </div>

    <div class="row g-5">
        <div class="col-lg-8">
            
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h5 class="mb-0 fw-bold">Customer Shipping Information</h5>
                <a href="#" class="text-decoration-none text-brand">Login to auto fill</a>
            </div>

            <form>
                <div class="row g-3 mb-4">
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">Full Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" placeholder="Enter your name">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">Phone Number <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" placeholder="Enter your number">
                    </div>
                    <div class="col-12">
                        <label class="form-label fw-semibold">Address <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" placeholder="|">
                    </div>
                </div>

                <h5 class="mb-4 fw-bold">Delivery Area</h5>
                <div class="row g-3 mb-5">
                    <div class="col-md-6">
                        <label class="custom-radio-card selected" id="areaLabel1">
                            <input type="radio" name="deliveryArea" checked>
                            <span class="checkmark-circle"></span>
                            <div class="card-content">
                                <span class="option-title">Inside Dhaka</span>
                                <span class="option-subtitle">৳50.00</span>
                            </div>
                        </label>
                    </div>
                    <div class="col-md-6">
                        <label class="custom-radio-card" id="areaLabel2">
                            <input type="radio" name="deliveryArea">
                            <span class="checkmark-circle"></span>
                            <div class="card-content">
                                <span class="option-title">Outside Dhaka</span>
                                <span class="option-subtitle">৳200.00</span>
                            </div>
                        </label>
                    </div>
                </div>

                <h5 class="mb-4 fw-bold">Payment Method</h5>
                
                <div class="payment-methods-container">
                    <label class="payment-option-card active" id="payLabelCOD">
                        <input type="radio" name="paymentMethod" value="cod" checked>
                        <div class="payment-icon-box">
                            <i class="bi bi-cash-coin fs-4"></i>
                        </div>
                        <span class="option-title">Cash on delivery</span>
                    </label>

                    <label class="payment-option-card" id="payLabelMobile">
                        <input type="radio" name="paymentMethod" value="mobile">
                        <div class="payment-icon-box">
                           <i class="bi bi-phone fs-4"></i>
                        </div>
                        <div class="d-flex align-items-center justify-content-between w-100">
                            <span class="option-title">Mobile Payment ( <span style="font-size:0.8em">Bkash/Nagad</span> )</span>
                            <i class="bi bi-chevron-down text-muted"></i>
                        </div>
                    </label>

                     <div id="mobilePaymentSection" class="hidden-section">
                        <div class="mobile-payment-list">
                             <div class="mobile-payment-item">
                                 <span class="provider-icon bkash"><i class="bi bi-send-fill"></i></span>
                                 <span>Setup Bkash</span>
                             </div>
                             <div class="mobile-payment-item">
                                 <span class="provider-icon nagad"><i class="bi bi-wallet-fill"></i></span>
                                 <span>Setup Nagad</span>
                             </div>
                         </div>
                    </div>


                    <label class="payment-option-card" id="payLabelBank">
                        <input type="radio" name="paymentMethod" value="bank">
                        <div class="payment-icon-box">
                            <i class="bi bi-credit-card-2-back fs-4"></i>
                        </div>
                        <span class="option-title">Bank and Card</span>
                    </label>

                    <div id="bankPaymentSection" class="hidden-section mt-4">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Account Holder Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Enter your email"> </div>
                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Bank Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Enter your email">
                            </div>
                            <div class="col-12">
                                <label class="form-label fw-semibold">Card Number <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Enter your name">
                            </div>
                             <div class="col-md-6">
                                <label class="form-label fw-semibold">Expiration Date <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Enter date">
                            </div>
                             <div class="col-md-6">
                                <label class="form-label fw-semibold">CVC <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Enter your cvc">
                            </div>
                        </div>
                        <p class="text-muted mt-3 small"><span class="text-warning fw-bold">Note:</span> If you use a card, you must enter the expiry date and CVC code.</p>
                    </div>

                </div>
            </form>
        </div>

        <div class="col-lg-4">
            <div class="summary-card sticky-top" style="top: 20px;">
                <h5 class="fw-bold mb-4">Order Summary</h5>
                
                <div class="input-group mb-4">
                    <input type="text" class="form-control" placeholder="Enter Promo Code">
                    <button class="btn btn-outline-secondary btn-apply" type="button">Apply</button>
                </div>

                <div class="summary-item">
                    <span class="text-muted">Subtotal</span>
                    <span class="fw-semibold">৳749.99</span>
                </div>
                <div class="summary-item">
                    <span class="text-muted">Discount (-10%)</span>
                    <span class="fw-semibold text-danger">-৳149.99</span>
                </div>
                 <div class="summary-item mb-4">
                    <span class="text-muted">Delivery Fee</span>
                    <span class="fw-semibold">৳49.99</span>
                </div>

                <div class="summary-item summary-total mb-4">
                    <span>Total</span>
                    <span>৳849.99</span>
                </div>

                <div class="form-check mb-4">
                    <input class="form-check-input" type="checkbox" value="" id="termsCheck">
                    <label class="form-check-label small text-muted" for="termsCheck">
                        I agree with <a href="#" class="text-brand text-decoration-none">terms and conditions</a> and <a href="#" class="text-brand text-decoration-none">privacy policy</a>
                    </label>
                </div>

                <button class="btn btn-brand w-100">Place Your Order And Pay <i class="bi bi-arrow-right ms-2"></i></button>
            </div>
        </div>
@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        // Function to handle payment method switching
        function handlePaymentChange() {
            // 1. Reset all payment option styles
            $('.payment-option-card').removeClass('active');
            
            // 2. Hide all dynamic sections
            $('#mobilePaymentSection').slideUp(200);
            $('#bankPaymentSection').slideUp(200);

            // 3. Get selected value
            const selectedValue = $('input[name="paymentMethod"]:checked').val();
            
            // 4. Apply active style to the selected card parent label
            $('input[name="paymentMethod"]:checked').closest('.payment-option-card').addClass('active');

            // 5. Show appropriate section based on value
            if (selectedValue === 'mobile') {
                 $('#mobilePaymentSection').slideDown(200);
            } else if (selectedValue === 'bank') {
                 $('#bankPaymentSection').slideDown(200);
            }
            // 'cod' does nothing extra
        }

        // Listen for changes on payment method radio buttons
        $('input[name="paymentMethod"]').on('change', handlePaymentChange);

        // Initial run to set correct state on page load
        handlePaymentChange();


        // Optional: Handle Delivery Area selection styling similarly
        $('input[name="deliveryArea"]').on('change', function() {
             $('.custom-radio-card').removeClass('selected');
             $(this).closest('.custom-radio-card').addClass('selected');
        });
    });
</script>
@endpush