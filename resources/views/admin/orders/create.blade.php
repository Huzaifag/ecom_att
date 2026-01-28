@extends('admin.layouts.main')

@section('title', 'Create New Order')

@section('content')
<div class="container-fluid py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="mb-0">Create New Order</h4>
        <a href="{{ route('admin.orders.index') }}" class="btn btn-outline-secondary">Back</a>
    </div>

    <form method="POST" action="{{ route('admin.orders.store') }}">
        @csrf

        <div class="row g-4">
            <!-- Left Column - Customer Info -->
            <div class="col-lg-6">
                <div class="card shadow-sm border-0 mb-4">
                    <div class="card-header bg-white">
                        <h6 class="mb-0">Customer Information</h6>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label fw-bold">Full Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="Enter your name" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Phone Number <span class="text-danger">*</span></label>
                            <input type="tel" class="form-control" placeholder="Enter your number" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Address <span class="text-danger">*</span></label>
                            <textarea class="form-control" rows="3" placeholder="Enter full address" required></textarea>
                        </div>
                    </div>
                </div>

                <div class="card shadow-sm border-0 mb-4">
                    <div class="card-header bg-white">
                        <h6 class="mb-0">Delivery Area</h6>
                    </div>
                    <div class="card-body">
                        <div class="d-flex flex-wrap gap-4">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="delivery_area" id="inside" value="inside" checked>
                                <label class="form-check-label" for="inside">
                                    Inside Dhaka
                                    <small class="d-block text-muted">৳ 10000</small>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="delivery_area" id="outside" value="outside">
                                <label class="form-check-label" for="outside">
                                    Outside Dhaka
                                    <small class="d-block text-muted">৳ 10000</small>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="delivery_area" id="free" value="free">
                                <label class="form-check-label" for="free">
                                    Free Shipping
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card shadow-sm border-0">
                    <div class="card-header bg-white">
                        <h6 class="mb-0">Payment Method</h6>
                    </div>
                    <div class="card-body">
                        <div class="d-flex flex-wrap gap-4">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="payment_method" id="cod" value="cod" checked>
                                <label class="form-check-label d-flex align-items-center" for="cod">
                                    <span class="badge bg-success me-2">Cash on delivery</span>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="payment_method" id="mobile" value="mobile">
                                <label class="form-check-label d-flex align-items-center" for="mobile">
                                    Mobile Payment
                                    <i class="bi bi-arrow-right ms-2"></i>
                                    <span class="badge bg-primary ms-2">bKash / Nagad</span>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="payment_method" id="card" value="card">
                                <label class="form-check-label" for="card">Bank Card</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column - Products & Summary -->
            <div class="col-lg-6">
                <div class="card shadow-sm border-0 mb-4">
                    <div class="card-header bg-white d-flex justify-content-between align-items-center">
                        <h6 class="mb-0">Product SKU & Price</h6>
                    </div>
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-md-8">
                                <label class="form-label fw-bold">Product SKU</label>
                                <input type="text" class="form-control" placeholder="Enter product SKU">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label fw-bold">Product Price <span class="text-danger">*</span></label>
                                <input type="number" class="form-control" placeholder="0.00" required>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card shadow-sm border-0 mb-4">
                    <div class="card-header bg-white">
                        <h6 class="mb-0">Product Variants & Size Guideline</h6>
                    </div>
                    <div class="card-body">
                        <!-- Variant Selector -->
                        <div class="d-flex gap-3 mb-4 flex-wrap">
                            <div>
                                <label class="form-label">Color</label>
                                <select class="form-select">
                                    <option>Red</option>
                                    <option>Blue</option>
                                    <option>Green</option>
                                </select>
                            </div>
                            <div>
                                <label class="form-label">Size</label>
                                <select class="form-select">
                                    <option>XS</option>
                                    <option>S</option>
                                    <option>M</option>
                                    <option>L</option>
                                    <option>XL</option>
                                </select>
                            </div>
                            <div class="align-self-end">
                                <button type="button" class="btn btn-outline-primary btn-sm">+ Add Color</button>
                                <button type="button" class="btn btn-outline-primary btn-sm">+ Add Size</button>
                            </div>
                        </div>

                        <!-- Selected Variants Table -->
                        <div class="table-responsive">
                            <table class="table table-bordered table-sm">
                                <thead class="table-light">
                                    <tr>
                                        <th>Color / Size</th>
                                        <th>XS</th>
                                        <th>S</th>
                                        <th>M</th>
                                        <th>L</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Red</td>
                                        <td><input type="number" class="form-control form-control-sm" value="8"></td>
                                        <td><input type="number" class="form-control form-control-sm" value="6"></td>
                                        <td><input type="number" class="form-control form-control-sm" value="4"></td>
                                        <td><input type="number" class="form-control form-control-sm" value="10"></td>
                                        <td class="fw-bold">28</td>
                                    </tr>
                                    <tr>
                                        <td>Blue</td>
                                        <td><input type="number" class="form-control form-control-sm" value="5"></td>
                                        <td><input type="number" class="form-control form-control-sm" value="6"></td>
                                        <td><input type="number" class="form-control form-control-sm" value="8"></td>
                                        <td><input type="number" class="form-control form-control-sm" value="10"></td>
                                        <td class="fw-bold">29</td>
                                    </tr>
                                    <tr>
                                        <td>Green</td>
                                        <td><input type="number" class="form-control form-control-sm" value="5"></td>
                                        <td><input type="number" class="form-control form-control-sm" value="8"></td>
                                        <td><input type="number" class="form-control form-control-sm" value="8"></td>
                                        <td><input type="number" class="form-control form-control-sm" value="12"></td>
                                        <td class="fw-bold">33</td>
                                    </tr>
                                    <tr class="table-active">
                                        <td><strong>Total Quantity</strong></td>
                                        <td colspan="4"></td>
                                        <td class="fw-bold">90</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Action Buttons -->
        <div class="mt-4 text-end">
            <button type="button" class="btn btn-outline-secondary me-2">Cancel</button>
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
</div>
@endsection

@push('styles')
<style>
    .form-check-label .badge {
        font-size: 0.75rem;
    }
    .table input[type="number"] {
        text-align: center;
        width: 60px;
    }
</style>
@endpush