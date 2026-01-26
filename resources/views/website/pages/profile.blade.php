@extends('website.layout.main')

@push('styles')
<style>
    /* --- Theme Variables --- */
    :root {
        --primary-teal: #3BB77E;
        --input-bg: #f7f8f9;
        --border-color: #ececec;
        --text-dark: #253D4E;
        --text-muted: #7e7e7e;
    }

    /* --- Profile Header --- */
    .profile-header {
        margin-bottom: 30px;
    }

    .profile-img-container {
        width: 100px;
        height: 100px;
        position: relative;
        margin-bottom: 10px;
    }

    .profile-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 50%;
        border: 3px solid #fff;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }
    
    .section-title {
        font-weight: 700;
        color: var(--text-dark);
        margin-bottom: 25px;
        font-size: 18px;
    }

    /* --- Form Styles --- */
    .form-label {
        font-weight: 600;
        font-size: 14px;
        color: var(--text-dark);
        margin-bottom: 8px;
    }

    .custom-input {
        background-color: var(--input-bg);
        border: 1px solid transparent;
        height: 50px;
        border-radius: 8px;
        font-size: 14px;
        color: #555;
    }

    .custom-input:focus {
        background-color: #fff;
        border-color: var(--primary-teal);
        box-shadow: none;
    }
    
    /* Disabled inputs look like the design's "view" mode */
    .custom-input:disabled, .custom-input[readonly] {
        background-color: var(--input-bg);
        color: #888;
    }

    /* --- Billing Method Cards --- */
    .billing-card {
        border: 1px solid var(--border-color);
        border-radius: 8px;
        padding: 15px;
        display: flex;
        align-items: center;
        gap: 12px;
        cursor: pointer;
        transition: all 0.2s;
        background: #fff;
        height: 100%;
    }

    .billing-card.active {
        border-color: var(--primary-teal);
        background-color: #fff;
    }
    
    .billing-icon {
        color: var(--primary-teal);
        font-size: 18px;
    }

    /* Custom Radio Button */
    .form-check-input:checked {
        background-color: var(--primary-teal);
        border-color: var(--primary-teal);
    }

    /* --- Buttons --- */
    .btn-outline-custom {
        border: 1px solid var(--primary-teal);
        color: var(--text-dark);
        padding: 10px 30px;
        border-radius: 6px;
        font-weight: 600;
        font-size: 14px;
        background: transparent;
        transition: all 0.3s;
    }

    .btn-outline-custom:hover {
        background-color: var(--primary-teal);
        color: #fff;
    }
    
    /* Payment Logos (for Mobile Payment) */
    .payment-logos img {
        height: 15px;
        margin: 0 2px;
    }

</style>
@endpush

@section('content')

<div class="container my-5">
    
    <div class="row">
        <div class="col-12">
            <h4 class="fw-bold mb-4">My Profile</h4>
            
            <div class="profile-header">
                <div class="profile-img-container">
                    <img src="https://via.placeholder.com/150/253D4E/FFFFFF?text=User" class="profile-img" alt="Profile">
                </div>
            </div>

            <form>
                <div class="row mb-4">
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Full Name</label>
                        <input type="text" class="form-control custom-input" value="Murxhad Alam">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control custom-input" value="malam@gmail.com">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Phone Number</label>
                        <input type="text" class="form-control custom-input" value="+880-12472939">
                    </div>
                </div>

                <div class="row mb-5">
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Address</label>
                        <input type="text" class="form-control custom-input" value="Dhaka, Bangladesh">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Gender</label>
                        <select class="form-select custom-input">
                            <option selected>Male</option>
                            <option>Female</option>
                            <option>Other</option>
                        </select>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Date Of Birth</label>
                        <input type="text" class="form-control custom-input" value="20 Dec 1997">
                    </div>
                </div>

                <h5 class="section-title">Saved Billing Method</h5>
                <div class="row mb-4">
                    <div class="col-md-4 mb-3">
                        <div class="billing-card" onclick="selectBilling('cod')">
                            <input class="form-check-input mt-0" type="radio" name="billingMethod" id="radio-cod">
                            <i class="fas fa-money-bill-wave text-success"></i>
                            <span class="small fw-bold">Cash on delivery</span>
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <div class="billing-card active" onclick="selectBilling('mobile')">
                            <input class="form-check-input mt-0" type="radio" name="billingMethod" id="radio-mobile" checked>
                            <div class="d-flex align-items-center flex-grow-1 justify-content-between">
                                <span class="small fw-bold">Mobile Payment</span>
                                <div class="payment-logos">
                                    <i class="fas fa-wallet text-danger"></i>
                                    <i class="fas fa-mobile-alt text-purple"></i>
                                </div>
                                <i class="fas fa-chevron-down text-muted small"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <div class="billing-card" onclick="selectBilling('bank')">
                            <input class="form-check-input mt-0" type="radio" name="billingMethod" id="radio-bank">
                            <i class="fas fa-university text-primary"></i>
                            <span class="small fw-bold">Bank and Card</span>
                        </div>
                    </div>
                </div>

                <div class="row mb-5">
                    <div class="col-md-4">
                        <label class="form-label">Bkash Mobile Number</label>
                        <input type="text" class="form-control custom-input" value="+880-239347929">
                    </div>
                </div>

                <div class="d-flex justify-content-end mb-5">
                    <button type="button" class="btn btn-outline-custom">Edit Profile</button>
                </div>

                <h5 class="section-title">Security Setting</h5>
                <div class="mb-5">
                    <button type="button" class="btn btn-outline-custom">Change Password</button>
                </div>

            </form>
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
    function selectBilling(type) {
        // Remove active class from all cards
        $('.billing-card').removeClass('active');
        
        // Check the radio button
        $('#radio-' + type).prop('checked', true);
        
        // Add active class to parent card
        $('#radio-' + type).closest('.billing-card').addClass('active');
    }
</script>
@endpush