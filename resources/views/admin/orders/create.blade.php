@extends('admin.layouts.main')

@section('title', 'Create New Order')

@section('content')

@push('styles')
<style>
    :root {
        --primary-teal: #00897b;
        --teal-hover: #00796b;
        --bg-input: #f8f9fa;
        --border-color: #eee;
    }

    /* General Layout */
    body {
        background-color: #fff;
        color: #333;
    }

    .form-label {
        font-weight: 600;
        font-size: 0.9rem;
        margin-bottom: 0.5rem;
        color: #444;
    }

    .required-star {
        color: #dc3545;
    }

    /* Custom Input Fields */
    .form-control, .form-select {
        background-color: var(--bg-input);
        border: 1px solid transparent;
        border-radius: 8px;
        padding: 0.75rem 1rem;
        font-size: 0.95rem;
    }

    .form-control:focus, .form-select:focus {
        background-color: #fff;
        border-color: var(--primary-teal);
        box-shadow: 0 0 0 3px rgba(0, 137, 123, 0.1);
    }

    /* Custom Radio Cards */
    .radio-card-label {
        display: flex;
        align-items: center;
        padding: 15px;
        border: 1px solid var(--border-color);
        border-radius: 10px;
        cursor: pointer;
        transition: all 0.2s;
        background: #fff;
        height: 100%;
    }

    /* Hide default radio */
    .btn-check:checked + .radio-card-label {
        border-color: var(--primary-teal);
        background-color: #e0f2f1; /* Very light teal tint */
    }

    .btn-check:checked + .radio-card-label .custom-radio-circle {
        border-color: var(--primary-teal);
        background-color: #fff;
    }

    .btn-check:checked + .radio-card-label .custom-radio-circle::after {
        transform: scale(1);
    }

    /* Custom Radio Circle */
    .custom-radio-circle {
        width: 20px;
        height: 20px;
        border: 2px solid #ccc;
        border-radius: 50%;
        margin-right: 12px;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .custom-radio-circle::after {
        content: '';
        width: 10px;
        height: 10px;
        background-color: var(--primary-teal);
        border-radius: 50%;
        transform: scale(0);
        transition: transform 0.2s;
    }

    .radio-text {
        font-size: 0.9rem;
        font-weight: 500;
    }
    
    .radio-subtext {
        font-size: 0.8rem;
        color: #777;
        margin-left: auto;
    }

    /* Toggle Buttons for Variants */
    .variant-toggle-container {
        background-color: #fff;
        border: 1px solid #eee;
        border-radius: 8px;
        padding: 4px;
        display: inline-flex;
        margin-bottom: 20px;
        width: 100%;
        max-width: 400px;
    }

    .variant-btn {
        flex: 1;
        border: none;
        background: transparent;
        padding: 8px 16px;
        border-radius: 6px;
        font-size: 0.9rem;
        font-weight: 500;
        color: #666;
    }

    .variant-btn.active {
        background-color: var(--primary-teal);
        color: #fff;
    }

    /* Tags */
    .tag-container {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
        margin-bottom: 15px;
    }
    
    .tag-badge {
        background-color: #fff;
        border: 1px solid #eee;
        color: #333;
        padding: 5px 10px;
        border-radius: 20px;
        font-size: 0.85rem;
        display: flex;
        align-items: center;
        gap: 6px;
    }

    .tag-remove {
        color: #dc3545;
        cursor: pointer;
        font-size: 1rem;
        line-height: 0.5;
    }

    .add-link {
        color: #0d6efd;
        text-decoration: none;
        font-size: 0.9rem;
        cursor: pointer;
    }

    /* Variant Table */
    .variant-table {
        border-radius: 8px;
        overflow: hidden;
        border: 1px solid #eee;
    }

    .variant-table thead {
        background-color: var(--primary-teal);
        color: white;
    }

    .variant-table th {
        font-weight: 500;
        border: none;
        padding: 10px 15px;
        font-size: 0.85rem;
        text-transform: uppercase;
    }

    .variant-table td {
        vertical-align: middle;
        background: #fff;
        border-bottom: 1px solid #eee;
        padding: 10px;
    }
    
    .stock-input {
        width: 60px;
        text-align: center;
        padding: 5px;
        border-radius: 4px;
        border: 1px solid #dee2e6;
    }

    /* Footer Buttons */
    .btn-footer-cancel {
        border: 1px solid #ccc;
        background: #fff;
        color: #333;
        padding: 10px 30px;
        border-radius: 6px;
        font-weight: 500;
    }

    .btn-footer-save {
        background: var(--primary-teal);
        border: 1px solid var(--primary-teal);
        color: #fff;
        padding: 10px 30px;
        border-radius: 6px;
        font-weight: 500;
    }
    .btn-footer-save:hover {
        background: var(--teal-hover);
        color: #fff;
    }

    .back-link {
        text-decoration: none;
        color: #6c757d;
        font-size: 0.9rem;
        display: flex;
        align-items: center;
        gap: 5px;
    }
</style>
@endpush

<div class="container py-4" style="max-width: 1000px;">
    
    <div class="mb-4">
        <a href="{{ route('admin.orders.index') }}" class="back-link mb-2">
            <i class="bi bi-chevron-left"></i> Back
        </a>
        <h3 class="fw-bold">Create New Order</h3>
    </div>

    <form action="{{ route('admin.orders.store') }}" method="POST">
        @csrf
        
        <div class="row g-4 mb-4">
            <div class="col-md-6">
                <label class="form-label">Full Name <span class="required-star">*</span></label>
                <input type="text" class="form-control" placeholder="Enter your name" name="name">
            </div>
            <div class="col-md-6">
                <label class="form-label">Phone Number <span class="required-star">*</span></label>
                <input type="text" class="form-control" placeholder="Enter your number" name="phone">
            </div>
            <div class="col-12">
                <label class="form-label">Address <span class="required-star">*</span></label>
                <input type="text" class="form-control" placeholder="Enter full address" name="address">
            </div>
        </div>

        <div class="mb-4">
            <label class="form-label mb-3">Delivery Area</label>
            <div class="row g-3">
                <div class="col-md-4">
                    <input type="radio" class="btn-check" name="delivery_area" id="area_inside" value="inside" checked>
                    <label class="radio-card-label" for="area_inside">
                        <div class="custom-radio-circle"></div>
                        <div class="d-flex flex-column">
                            <span class="radio-text">Inside Dhaka</span>
                            <span class="text-muted small">80.00</span>
                        </div>
                    </label>
                </div>
                <div class="col-md-4">
                    <input type="radio" class="btn-check" name="delivery_area" id="area_outside" value="outside">
                    <label class="radio-card-label" for="area_outside">
                        <div class="custom-radio-circle"></div>
                        <div class="d-flex flex-column">
                            <span class="radio-text">Outside Dhaka</span>
                            <span class="text-muted small">150.00</span>
                        </div>
                    </label>
                </div>
                <div class="col-md-4">
                    <input type="radio" class="btn-check" name="delivery_area" id="area_free" value="free">
                    <label class="radio-card-label" for="area_free">
                        <div class="custom-radio-circle"></div>
                        <div class="d-flex flex-column">
                            <span class="radio-text">Free Shipping</span>
                            <span class="text-muted small">0.00</span>
                        </div>
                    </label>
                </div>
            </div>
        </div>

        <div class="mb-4">
            <label class="form-label mb-3">Payment Method</label>
            <div class="row g-3">
                <div class="col-md-4">
                    <input type="radio" class="btn-check" name="payment_method" id="pay_cod" value="cod" checked>
                    <label class="radio-card-label" for="pay_cod">
                        <div class="custom-radio-circle"></div>
                        <span class="radio-text"><i class="bi bi-cash me-2 text-success"></i> Cash on delivery</span>
                    </label>
                </div>
                <div class="col-md-4">
                    <input type="radio" class="btn-check" name="payment_method" id="pay_mobile" value="mobile">
                    <label class="radio-card-label" for="pay_mobile">
                        <div class="custom-radio-circle"></div>
                        <span class="radio-text">Mobile Payment</span>
                        <span class="ms-2 badge bg-light text-dark border">Bkash</span>
                    </label>
                </div>
                <div class="col-md-4">
                    <input type="radio" class="btn-check" name="payment_method" id="pay_bank" value="bank">
                    <label class="radio-card-label" for="pay_bank">
                        <div class="custom-radio-circle"></div>
                        <span class="radio-text"><i class="bi bi-bank me-2 text-info"></i> Bank and Card</span>
                    </label>
                </div>
            </div>
        </div>

        <div class="row g-4 mb-4">
            <div class="col-md-6">
                <label class="form-label">Product SKU <span class="required-star">*</span></label>
                <input type="text" class="form-control" name="sku">
            </div>
            <div class="col-md-6">
                <label class="form-label">Product Price <span class="required-star">*</span></label>
                <input type="text" class="form-control" name="price">
            </div>
        </div>

        <div class="mb-5">
            <label class="form-label mb-3">Product Variants & Size Guideline</label>
            
            <div class="variant-toggle-container">
                <button type="button" class="variant-btn active">Color & Sizes</button>
                <button type="button" class="variant-btn">Size Measurements</button>
            </div>

            <div class="row g-3 mb-3">
                <div class="col-md-6">
                    <label class="form-label small text-muted">Color</label>
                    <select class="form-select">
                        <option>Red</option>
                        <option>Blue</option>
                        <option>Green</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label class="form-label small text-muted">Size</label>
                    <select class="form-select">
                        <option>XS</option>
                        <option>S</option>
                        <option>M</option>
                        <option>L</option>
                    </select>
                </div>
            </div>

            <div class="mb-3">
                <div class="d-flex gap-4 mb-2">
                    <span class="add-link">+ Add Color</span>
                    <span class="add-link">+ Add Size</span>
                </div>
                
                <div class="tag-container">
                    <div class="tag-badge">Red <span class="tag-remove">×</span></div>
                    <div class="tag-badge">Blue <span class="tag-remove">×</span></div>
                    <div class="tag-badge">Green <span class="tag-remove">×</span></div>
                </div>
                <div class="tag-container">
                    <div class="tag-badge">XS <span class="tag-remove">×</span></div>
                    <div class="tag-badge">S <span class="tag-remove">×</span></div>
                    <div class="tag-badge">L <span class="tag-remove">×</span></div>
                </div>
            </div>

            <div class="variant-table">
                <table class="table mb-0">
                    <thead>
                        <tr>
                            <th>Color / Size</th>
                            <th class="text-center">XS</th>
                            <th class="text-center">S</th>
                            <th class="text-center">M</th>
                            <th class="text-center">L</th>
                            <th class="text-center">Total Stock</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Red</td>
                            <td class="text-center"><input type="text" class="stock-input" value="12"></td>
                            <td class="text-center"><input type="text" class="stock-input" value="5"></td>
                            <td class="text-center"><input type="text" class="stock-input" value="0"></td>
                            <td class="text-center"><input type="text" class="stock-input" value="12"></td>
                            <td class="text-center fw-bold">29</td>
                        </tr>
                        <tr>
                            <td>Blue</td>
                            <td class="text-center"><input type="text" class="stock-input" value="12"></td>
                            <td class="text-center"><input type="text" class="stock-input" value="5"></td>
                            <td class="text-center"><input type="text" class="stock-input" value="6"></td>
                            <td class="text-center"><input type="text" class="stock-input" value="12"></td>
                            <td class="text-center fw-bold">35</td>
                        </tr>
                        <tr>
                            <td>Green</td>
                            <td class="text-center"><input type="text" class="stock-input" value="12"></td>
                            <td class="text-center"><input type="text" class="stock-input" value="5"></td>
                            <td class="text-center"><input type="text" class="stock-input" value="6"></td>
                            <td class="text-center"><input type="text" class="stock-input" value="12"></td>
                            <td class="text-center fw-bold">35</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="d-flex justify-content-end gap-3 pb-5">
            <button type="button" class="btn btn-footer-cancel">Cancel</button>
            <button type="submit" class="btn btn-footer-save">Save</button>
        </div>

    </form>
</div>
@endsection