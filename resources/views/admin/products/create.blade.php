@extends('admin.layouts.main')

@section('title', 'Add New Product')

@section('content')
<div class="container-fluid">
    <div class="d-flex align-items-center mb-4">
        <a href="#" class="text-secondary mr-2" style="text-decoration: none;">
            <i class="fas fa-chevron-left"></i> Back
        </a>
    </div>
    <h1 class="h3 mb-4 text-gray-800 font-weight-bold">Add New Product</h1>

    <form action="" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-lg-4 mb-4">
                
                <div class="card shadow-sm border-0 mb-4">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="d-flex flex-column mr-3" style="width: 80px;">
                                @for($i = 0; $i < 4; $i++)
                                <div class="mb-2 d-flex align-items-center justify-content-center bg-light rounded text-muted border" 
                                     style="height: 80px; cursor: pointer; border-style: dashed !important;">
                                    <div class="text-center small">
                                        <i class="far fa-image mb-1"></i><br>
                                        <span style="font-size: 10px;">Browse Image</span>
                                    </div>
                                </div>
                                @endfor
                            </div>
                            <div class="flex-grow-1 d-flex align-items-center justify-content-center bg-light rounded text-muted border" 
                                 style="height: 345px; cursor: pointer; border-style: dashed !important;">
                                <div class="text-center">
                                    <i class="far fa-image fa-3x mb-2"></i><br>
                                    <span>Browse Image</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card shadow-sm border-0">
                    <div class="card-header bg-white py-3">
                        <h6 class="m-0 font-weight-bold text-dark">Product Variants & Size Guideline</h6>
                    </div>
                    <div class="card-body">
                        <div class="d-flex bg-light rounded p-1 mb-3 border">
                            <button type="button" class="btn btn-sm flex-fill font-weight-bold" id="tab-color-btn" onclick="switchTab('color')">
                                Color & Sizes
                            </button>
                            <button type="button" class="btn btn-sm flex-fill font-weight-bold" id="tab-size-btn" onclick="switchTab('size')">
                                Size Measurements
                            </button>
                        </div>

                        <div id="tab-color-content">
                            <div class="row mb-3">
                                <div class="col-6">
                                    <label class="small font-weight-bold">Color</label>
                                    <select class="form-control form-control-sm bg-light border-0">
                                        <option>Red</option>
                                    </select>
                                    <a href="#" class="small text-primary mt-1 d-inline-block">+ Add Color</a>
                                </div>
                                <div class="col-6">
                                    <label class="small font-weight-bold">Size</label>
                                    <select class="form-control form-control-sm bg-light border-0">
                                        <option>XS</option>
                                    </select>
                                    <a href="#" class="small text-primary mt-1 d-inline-block">+ Add Size</a>
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="mb-2">
                                    <span class="badge bg-light text-dark border mr-1 px-2 py-1">Red <i class="fas fa-times text-danger ml-1" style="cursor:pointer"></i></span>
                                    <span class="badge bg-light text-dark border mr-1 px-2 py-1">Blue <i class="fas fa-times text-danger ml-1" style="cursor:pointer"></i></span>
                                    <span class="badge bg-light text-dark border mr-1 px-2 py-1">Green <i class="fas fa-times text-danger ml-1" style="cursor:pointer"></i></span>
                                </div>
                                <div>
                                    <span class="badge bg-light text-dark border mr-1 px-2 py-1">XS <i class="fas fa-times text-danger ml-1" style="cursor:pointer"></i></span>
                                    <span class="badge bg-light text-dark border mr-1 px-2 py-1">S <i class="fas fa-times text-danger ml-1" style="cursor:pointer"></i></span>
                                    <span class="badge bg-light text-dark border mr-1 px-2 py-1">L <i class="fas fa-times text-danger ml-1" style="cursor:pointer"></i></span>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-bordered table-sm text-center mb-0" style="font-size: 0.85rem;">
                                    <thead class="bg-teal text-white" style="background-color: #008080;">
                                        <tr>
                                            <th>Color / Size</th>
                                            <th>XS</th>
                                            <th>S</th>
                                            <th>M</th>
                                            <th>L</th>
                                            <th>Total Stock</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="align-middle">Red</td>
                                            <td><input type="text" class="form-control form-control-sm text-center p-0" value="12"></td>
                                            <td><input type="text" class="form-control form-control-sm text-center p-0" value="5"></td>
                                            <td><input type="text" class="form-control form-control-sm text-center p-0" value="6"></td>
                                            <td><input type="text" class="form-control form-control-sm text-center p-0" value="12"></td>
                                            <td class="align-middle font-weight-bold">34</td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle">Blue</td>
                                            <td><input type="text" class="form-control form-control-sm text-center p-0" value="12"></td>
                                            <td><input type="text" class="form-control form-control-sm text-center p-0" value="5"></td>
                                            <td><input type="text" class="form-control form-control-sm text-center p-0" value="6"></td>
                                            <td><input type="text" class="form-control form-control-sm text-center p-0" value="12"></td>
                                            <td class="align-middle font-weight-bold">34</td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle">Green</td>
                                            <td><input type="text" class="form-control form-control-sm text-center p-0" value="12"></td>
                                            <td><input type="text" class="form-control form-control-sm text-center p-0" value="5"></td>
                                            <td><input type="text" class="form-control form-control-sm text-center p-0" value="6"></td>
                                            <td><input type="text" class="form-control form-control-sm text-center p-0" value="12"></td>
                                            <td class="align-middle font-weight-bold">34</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div id="tab-size-content" style="display: none;">
                            <p class="small text-muted mb-2">Size Chart (All are size in Inch)</p>
                            <div class="table-responsive">
                                <table class="table table-borderless table-sm mb-0">
                                    <thead class="bg-teal text-white" style="background-color: #008080;">
                                        <tr>
                                            <th class="py-2 pl-3 rounded-left">Size</th>
                                            <th class="py-2">Chest</th>
                                            <th class="py-2 pr-3 rounded-right">Length</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach(['XXS', 'XS', 'S', 'M', 'L', 'XL', 'XXL'] as $size)
                                        <tr>
                                            <td>
                                                <select class="form-control form-control-sm bg-light border-0">
                                                    <option>{{ $size }}</option>
                                                </select>
                                            </td>
                                            <td><input type="text" class="form-control form-control-sm bg-light border-0" value="39.5"></td>
                                            <td><input type="text" class="form-control form-control-sm bg-light border-0" value="27.5"></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-lg-8 mb-4">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <div class="form-group">
                            <label class="font-weight-bold small">Product Title <span class="text-danger">*</span></label>
                            <input type="text" class="form-control bg-light border-0" placeholder="">
                        </div>

                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label class="font-weight-bold small">Category <span class="text-danger">*</span></label>
                                <select class="form-control bg-light border-0">
                                    <option>Men</option>
                                </select>
                            </div>
                            <div class="col-md-6 form-group">
                                <label class="font-weight-bold small">Sub-category <span class="text-danger">*</span></label>
                                <select class="form-control bg-light border-0">
                                    <option>Polo Shirt</option>
                                </select>
                            </div>
                            <div class="col-12 text-right">
                                <a href="#" class="small text-primary"><i class="fas fa-plus"></i> Add New Category</a>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-md-6 form-group">
                                <label class="font-weight-bold small">Regular Price <span class="text-danger">*</span></label>
                                <input type="text" class="form-control bg-light border-0">
                            </div>
                            <div class="col-md-6 form-group">
                                <label class="font-weight-bold small">Sale Price</label>
                                <input type="text" class="form-control bg-light border-0">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label class="font-weight-bold small">Discount %</label>
                                <input type="text" class="form-control bg-light border-0">
                            </div>
                            <div class="col-md-6 form-group">
                                <label class="font-weight-bold small">Status</label>
                                <select class="form-control bg-light border-0">
                                    <option>Active</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label class="font-weight-bold small">Product SKU <span class="text-danger">*</span></label>
                                <input type="text" class="form-control bg-light border-0">
                            </div>
                            <div class="col-md-6 form-group">
                                <label class="font-weight-bold small">Availability <span class="text-danger">*</span></label>
                                <select class="form-control bg-light border-0">
                                    <option>In Stock</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label class="font-weight-bold small">Fabric / Material <span class="text-danger">*</span></label>
                                <input type="text" class="form-control bg-light border-0">
                            </div>
                            <div class="col-md-6 form-group">
                                <label class="font-weight-bold small">Weight (Courier Charge) <span class="text-danger">*</span></label>
                                <input type="text" class="form-control bg-light border-0">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label class="font-weight-bold small">SEO Title <span class="text-danger">*</span></label>
                                <input type="text" class="form-control bg-light border-0">
                            </div>
                            <div class="col-md-6 form-group">
                                <label class="font-weight-bold small">SEO Description <span class="text-danger">*</span></label>
                                <input type="text" class="form-control bg-light border-0">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold small">Keywords <span class="text-danger">*</span></label>
                            <input type="text" class="form-control bg-light border-0">
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold small">Full Description <span class="text-danger">*</span></label>
                            <textarea class="form-control bg-light border-0" rows="6"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-12 d-flex justify-content-end gap-2">
                <button type="button" class="btn btn-outline-secondary mr-2 px-4">Cancel</button>
                <button type="button" class="btn btn-outline-secondary mr-2 px-4">Publish</button>
                <button type="button" class="btn btn-outline-secondary mr-2 px-4">Preview</button>
                <button type="submit" class="btn text-white px-5" style="background-color: #008080;">Save</button>
            </div>
        </div>
    </form>
</div>
@endsection

@push('scripts')
<script>
    // Tab Switching Logic
    function switchTab(tabName) {
        const colorBtn = document.getElementById('tab-color-btn');
        const sizeBtn = document.getElementById('tab-size-btn');
        const colorContent = document.getElementById('tab-color-content');
        const sizeContent = document.getElementById('tab-size-content');

        if (tabName === 'color') {
            // Activate Color Tab
            colorBtn.style.backgroundColor = '#008080';
            colorBtn.style.color = 'white';
            sizeBtn.style.backgroundColor = 'transparent';
            sizeBtn.style.color = '#858796'; // Bootstrap standard gray

            colorContent.style.display = 'block';
            sizeContent.style.display = 'none';
        } else {
            // Activate Size Tab
            sizeBtn.style.backgroundColor = '#008080';
            sizeBtn.style.color = 'white';
            colorBtn.style.backgroundColor = 'transparent';
            colorBtn.style.color = '#858796';

            sizeContent.style.display = 'block';
            colorContent.style.display = 'none';
        }
    }

    // Initialize default tab
    document.addEventListener("DOMContentLoaded", function() {
        switchTab('color');
    });
</script>
@endpush

@push('styles')
<style>
    .form-control:focus {
        box-shadow: none;
        border: 1px solid #008080 !important;
    }
    .bg-light {
        background-color: #f8f9fc !important;
    }
    /* Specific overrides for placeholder/input styling */
    label.small {
        font-size: 0.85rem;
        color: #5a5c69;
    }
</style>
@endpush