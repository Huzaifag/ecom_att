@extends('website.layout.main')

@push('styles')
<style>
    /* --- Theme Variables based on Image --- */
    :root {
        --primary-teal: #3BB77E; /* The main green/teal color */
        --primary-hover: #2ea66d;
        --status-orange: #ffaa00;
        --bg-orange-light: #fff3cd;
        --text-muted: #7e7e7e;
        --border-color: #ececec;
        --input-bg: #f7f8f9;
    }

    .text-teal { color: var(--primary-teal) !important; }
    .bg-teal { background-color: var(--primary-teal) !important; }
    
    /* --- Stepper (Top Progress Bar) --- */
    .stepper-wrapper {
        display: flex;
        justify-content: space-between;
        margin-bottom: 40px;
        position: relative;
        max-width: 600px;
        margin-left: auto;
        margin-right: auto;
    }

    .stepper-wrapper::before {
        content: "";
        position: absolute;
        top: 15px;
        left: 0;
        width: 100%;
        height: 2px;
        background-color: #e0e0e0;
        z-index: 1;
    }

    .stepper-item {
        position: relative;
        display: flex;
        flex-direction: column;
        align-items: center;
        flex: 1;
        z-index: 2;
    }

    .step-counter {
        width: 35px;
        height: 35px;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 50%;
        background: #fff;
        border: 2px solid #e0e0e0;
        color: #e0e0e0;
        font-weight: 600;
        margin-bottom: 6px;
        transition: all 0.3s;
    }

    .step-name {
        color: #e0e0e0;
        font-size: 14px;
        font-weight: 500;
    }

    /* Active State (Current Step) */
    .stepper-item.active .step-counter {
        border-color: var(--primary-teal);
        color: var(--primary-teal);
    }
    .stepper-item.active .step-name {
        color: var(--primary-teal);
    }

    /* Completed State */
    .stepper-item.completed .step-counter {
        background-color: var(--primary-teal);
        border-color: var(--primary-teal);
        color: #fff;
    }
    .stepper-item.completed .step-name {
        color: #000;
    }

    /* Connecting Line Progress */
    .stepper-wrapper::after {
        content: "";
        position: absolute;
        top: 15px;
        left: 0;
        height: 2px;
        background-color: var(--primary-teal);
        z-index: 1;
        width: 0%; /* JS will control this */
        transition: width 0.3s ease;
    }
    
    .step-1-active .stepper-wrapper::after { width: 0%; }
    .step-2-active .stepper-wrapper::after { width: 50%; }
    .step-3-active .stepper-wrapper::after { width: 100%; }

    /* --- Form Styling (Image 1) --- */
    .custom-input {
        background-color: var(--input-bg);
        border: 1px solid transparent;
        height: 50px;
        border-radius: 8px;
    }
    .custom-input:focus {
        background-color: #fff;
        border-color: var(--primary-teal);
        box-shadow: none;
    }
    .btn-outline-custom {
        border: 1px solid var(--primary-teal);
        color: #000;
        padding: 10px 40px;
        border-radius: 4px;
        font-weight: 600;
        background: transparent;
    }
    .btn-outline-custom:hover {
        background-color: var(--primary-teal);
        color: #fff;
    }

    /* --- Timeline (Image 2) --- */
    .order-progress-card {
        border: 1px solid var(--border-color);
        border-radius: 10px;
        padding: 20px;
        margin-bottom: 20px;
    }
    .status-badge {
        background-color: var(--bg-orange-light);
        color: var(--status-orange);
        padding: 5px 15px;
        border-radius: 4px;
        font-weight: 600;
        border: 1px solid var(--status-orange);
        display: inline-block;
    }
    
    .timeline-container {
        display: flex;
        justify-content: space-between;
        margin-top: 30px;
        margin-bottom: 20px;
        flex-wrap: wrap;
        gap: 10px;
    }
    
    .timeline-step {
        flex: 1;
        text-align: center;
        min-width: 120px;
    }
    
    .timeline-step .box {
        padding: 10px;
        border-radius: 5px;
        color: #fff;
        font-size: 13px;
        margin-bottom: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 5px;
    }
    
    .timeline-step.done .box { background-color: var(--primary-teal); }
    .timeline-step.pending .box { background-color: #9ca3af; } /* Gray */
    
    .timeline-time {
        font-size: 11px;
        color: var(--text-muted);
    }

    /* --- Order Details (Image 3) --- */
    .product-card {
        border: 1px solid var(--border-color);
        border-radius: 8px;
        padding: 15px;
        margin-bottom: 15px;
        display: flex;
        gap: 15px;
        align-items: center;
    }
    .product-img {
        width: 80px;
        height: 80px;
        object-fit: cover;
        border-radius: 6px;
    }
    .order-summary-box {
        border: 1px solid var(--border-color);
        border-radius: 8px;
        padding: 20px;
    }
    .summary-row {
        display: flex;
        justify-content: space-between;
        margin-bottom: 10px;
        font-size: 14px;
        color: #555;
    }
    .summary-total {
        border-top: 2px solid var(--primary-teal);
        padding-top: 15px;
        margin-top: 10px;
        font-weight: 700;
        font-size: 16px;
        display: flex;
        justify-content: space-between;
    }

    /* Helper Utilities */
    .section-title i { margin-right: 10px; color: var(--primary-teal); }
    .step-section { display: none; } /* Hidden by default */
    .step-section.active { display: block; }
</style>
@endpush

@section('content')

<div class="container my-5 step-1-active" id="main-container">
    
    <div class="text-center mb-5">
        <h2 class="section-title fw-bold"><i class="fas fa-box-open"></i> Track Your Order</h2>
    </div>

    <div class="stepper-wrapper">
        <div class="stepper-item active" id="stepper-1">
            <div class="step-counter">1</div>
            <div class="step-name">Enter Details</div>
        </div>
        <div class="stepper-item" id="stepper-2">
            <div class="step-counter">2</div>
            <div class="step-name">Track Order</div>
        </div>
        <div class="stepper-item" id="stepper-3">
            <div class="step-counter">3</div>
            <div class="step-name">Order Details</div>
        </div>
    </div>

    <div id="step-view-1" class="step-section active">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form id="trackForm">
                    <div class="mb-4">
                        <label class="form-label fw-bold">Order ID <span class="text-danger">*</span></label>
                        <input type="text" class="form-control custom-input" placeholder="ALL-245-65" value="ALL-245-65">
                        <small class="text-muted mt-1 d-block">You can find your order ID in your order confirmation email.</small>
                    </div>
                    
                    <div class="mb-4">
                        <label class="form-label fw-bold">Mobile Number <span class="text-danger">*</span></label>
                        <input type="text" class="form-control custom-input" placeholder="123-456-7890" value="123-456-7890">
                        <small class="text-muted mt-1 d-block">Enter the mobile number associated with this order.</small>
                    </div>

                    <div class="text-center mt-5">
                        <button type="button" class="btn btn-outline-custom" id="btn-track-order">Track Order</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div id="step-view-2" class="step-section">
        <h4 class="mb-3 fw-bold">Your Order Progress</h4>
        
        <div class="order-progress-card">
            <div class="d-flex align-items-center gap-3">
                <div class="bg-light p-3 rounded">
                    <i class="fas fa-box text-teal fa-2x"></i>
                </div>
                <div>
                    <h5 class="mb-1 fw-bold">Order #ALL-245-65</h5>
                    <p class="text-muted mb-1" style="font-size: 13px;">Placed on: October 15, 2023</p>
                    <div class="d-flex align-items-center gap-2">
                        <span class="fw-bold" style="font-size:14px;">Status</span>
                        <span class="status-badge">Processing</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="order-progress-card">
            <h6 class="fw-bold mb-3">Delivery Timeline</h6>
            
            <div class="timeline-container">
                <div class="timeline-step done">
                    <div class="box"><i class="fas fa-check"></i> Order Confirmed</div>
                    <div class="timeline-time">October 15, 2023 | 10:30 AM</div>
                </div>
                <div class="timeline-step done">
                    <div class="box"><i class="fas fa-check"></i> Processing Order</div>
                    <div class="timeline-time">October 16, 2023 | 09:15 AM</div>
                </div>
                <div class="timeline-step done">
                    <div class="box"><i class="fas fa-check"></i> Shipped</div>
                    <div class="timeline-time">October 18, 2023 | 09:15 AM</div>
                </div>
                <div class="timeline-step pending">
                    <div class="box">In Transit</div>
                    <div class="timeline-time">October 20, 2023 | 09:15 AM</div>
                </div>
                <div class="timeline-step pending">
                    <div class="box">Delivered</div>
                    <div class="timeline-time">October 23, 2023 | 09:15 AM</div>
                </div>
            </div>
            
            <p class="mt-4 mb-0" style="font-size: 14px;">
                <span class="text-warning">Need Help?</span> Contact Our Customer Support At +8801798438494 Or Email Support@Softstylefashion.Com
            </p>
        </div>

        <div class="text-center mt-4">
            <button type="button" class="btn btn-outline-custom" id="btn-view-details">Order Details</button>
        </div>
    </div>

    <div id="step-view-3" class="step-section">
        <h4 class="mb-3 fw-bold">Your Order Progress</h4>
         <div class="order-progress-card mb-4">
            <div class="d-flex align-items-center gap-3">
                <div class="bg-light p-3 rounded">
                    <i class="fas fa-box text-teal fa-2x"></i>
                </div>
                <div>
                    <h5 class="mb-1 fw-bold">Order #ALL-245-65</h5>
                    <p class="text-muted mb-1" style="font-size: 13px;">Placed on: October 15, 2023</p>
                    <div class="d-flex align-items-center gap-2">
                        <span class="fw-bold" style="font-size:14px;">Status</span>
                        <span class="status-badge">Processing</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <div class="product-card">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTsPYEQnBraLTmMztgK274iWKcbiocMzDf9Zg&s" class="product-img" alt="Product">
                    <div class="flex-grow-1">
                        <h6 class="fw-bold mb-1">Men's Premium Blank T-shirt-green | Organic Ring spun</h6>
                        <p class="mb-1 text-muted small">Combed Compact Cotton | 100% Cotton Basic T-Shirt Combo Pack</p>
                        <p class="mb-0 text-muted small">Color: <span class="text-dark">Green</span></p>
                    </div>
                    <div class="fw-bold">৳749.99</div>
                </div>

                <div class="product-card">
                     <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTsPYEQnBraLTmMztgK274iWKcbiocMzDf9Zg&s" class="product-img" alt="Product">
                    <div class="flex-grow-1">
                        <h6 class="fw-bold mb-1">Men's Premium Blank T-shirt-green | Organic Ring spun</h6>
                        <p class="mb-1 text-muted small">Combed Compact Cotton | 100% Cotton Basic T-Shirt Combo Pack</p>
                        <p class="mb-0 text-muted small">Color: <span class="text-dark">Green</span></p>
                    </div>
                    <div class="fw-bold">৳749.99</div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="order-summary-box">
                    <h5 class="fw-bold mb-4">Order Summary</h5>
                    
                    <div class="summary-row">
                        <span>Subtotal</span>
                        <span>৳749.99</span>
                    </div>
                    <div class="summary-row">
                        <span>Discount (-10%)</span>
                        <span>-৳149.99</span>
                    </div>
                    <div class="summary-row">
                        <span>Delivery Fee</span>
                        <span>৳49.99</span>
                    </div>

                    <div class="summary-total">
                        <span>Total</span>
                        <span>৳849.99</span>
                    </div>
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
    $(document).ready(function() {
        
        // --- Navigation Logic ---

        // 1. Go from Step 1 (Enter Details) to Step 2 (Track Order)
        $('#btn-track-order').on('click', function() {
            // Optional: Add Validation here
            
            // Hide Step 1, Show Step 2
            $('#step-view-1').removeClass('active');
            $('#step-view-2').addClass('active');

            // Update Stepper UI
            $('#stepper-1').addClass('completed').removeClass('active');
            $('#stepper-1 .step-counter').html('<i class="fas fa-check"></i>'); // Change number to checkmark
            $('#stepper-2').addClass('active');
            
            // Update Progress Line wrapper class
            $('#main-container').removeClass('step-1-active').addClass('step-2-active');
        });

        // 2. Go from Step 2 (Track Order) to Step 3 (Order Details)
        $('#btn-view-details').on('click', function() {
            
            // Hide Step 2, Show Step 3
            $('#step-view-2').removeClass('active');
            $('#step-view-3').addClass('active');

            // Update Stepper UI
            $('#stepper-2').addClass('completed').removeClass('active');
            $('#stepper-2 .step-counter').html('<i class="fas fa-check"></i>');
            $('#stepper-3').addClass('active'); // Step 3 usually stays just active, not completed until delivery
            
            // Update Progress Line wrapper class
            $('#main-container').removeClass('step-2-active').addClass('step-3-active');
        });

    });
</script>
@endpush