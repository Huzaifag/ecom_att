<div class="container my-5">
    <!-- Sort & Show Filters -->
    <div class="row justify-content-between align-items-center mb-4">
        <div class="col-md-3 col-12">
            <div class="d-flex align-items-center gap-2">
                <span class="text-muted fw-medium" style="width: 80px">Sort By</span>
                <select class="form-select sort-select" aria-label="Sort by price">
                    <option selected>Price (Low to High)</option>
                    <option value="high-to-low">Price (High to Low)</option>
                    <option value="newest">Newest First</option>
                    <option value="popular">Most Popular</option>
                </select>
            </div>
        </div>

        <div class="col-md-3 col-12 text-md-end mt-3 mt-md-0">
            <div class="d-inline-flex align-items-center gap-2">
                <span class="text-muted fw-medium">Show</span>
                <select class="form-select show-select w-auto" aria-label="Show items per page">
                    <option>12</option>
                    <option>24</option>
                    <option>36</option>
                    <option>48</option>
                </select>
            </div>
        </div>
    </div>

    <!-- Products Grid -->
    @if (count($products) > 0)
        <div class="row g-4 mb-4">
            @foreach ($products as $product)
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <x-website.product-card :product="$product" />
                </div>
            @endforeach
        </div>
    @else
        <div class="text-center py-5">
            <p class="text-muted">No products found.</p>
        </div>
    @endif
</div>

@push('styles')
<style>
    .sort-select,
    .show-select {
        border: 1px solid #ced4da;
        border-radius: 8px;
        padding: 8px 12px;
        font-size: 14px;
        color: #495057;
        background-color: #fff;
        min-width: 180px;
    }

    .show-select {
        min-width: 80px;
        width: auto;
    }

    /* Optional: subtle arrow down icon inside select */
    .sort-select,
    .show-select {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23333' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e");
        background-repeat: no-repeat;
        background-position: right 12px center;
        background-size: 12px;
        appearance: none;
        -webkit-appearance: none;
    }

    /* Hover & focus style */
    .sort-select:focus,
    .show-select:focus {
        border-color: #008080;
        box-shadow: 0 0 0 0.2rem rgba(0, 128, 128, 0.15);
    }
</style>
@endpush

@push('scripts')
<script>
    // Optional: Handle sort change (send to controller or update URL)
    document.querySelector('.sort-select').addEventListener('change', function () {
        const sortValue = this.value;
        // Example: update URL or submit form
        // window.location.search = `?sort=${sortValue}`;
        console.log('Sort by:', sortValue);
    });

    // Handle show items per page
    document.querySelector('.show-select').addEventListener('change', function () {
        const perPage = this.value;
        // window.location.search = `?show=${perPage}`;
        console.log('Show:', perPage);
    });
</script>
@endpush