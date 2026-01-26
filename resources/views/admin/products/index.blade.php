@extends('admin.layouts.main')

@section('title', 'Product List')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">All Categories</h1>
    </div>

    <div class="row mb-4">
        @php
            $cardStyle = "background-color: #f8f9fc; border: 1px solid #e3e6f0; border-radius: 10px;";
            $iconBoxStyle = "width: 40px; height: 40px; background-color: white; border-radius: 8px; display: flex; align-items: center; justify-content: center; color: #5a5c69;";
            
            $categories = [
                ['name' => 'Men', 'count' => 25, 'icon' => 'fas fa-tshirt'],
                ['name' => 'Women', 'count' => 36, 'icon' => 'fas fa-female'],
                ['name' => 'Kid', 'count' => 36, 'icon' => 'fas fa-child'],
                ['name' => 'Family', 'count' => 36, 'icon' => 'fas fa-users'],
                ['name' => 'Eid', 'count' => 36, 'icon' => 'fas fa-mosque'],
                ['name' => 'Sports', 'count' => 36, 'icon' => 'fas fa-running'],
                ['name' => 'Festival Collection', 'count' => 25, 'icon' => 'fas fa-gifts'],
                ['name' => 'Lingerie', 'count' => 36, 'icon' => 'fas fa-heart'],
                ['name' => 'Home Textile', 'count' => 36, 'icon' => 'fas fa-bed'],
                ['name' => 'Home Decor', 'count' => 36, 'icon' => 'fas fa-couch'],
                ['name' => 'Wedding', 'count' => 36, 'icon' => 'fas fa-ring'],
                ['name' => 'Others', 'count' => 36, 'icon' => 'fas fa-list'],
            ];
        @endphp

        @foreach($categories as $cat)
        <div class="col-xl-2 col-md-4 col-6 mb-3">
            <div class="card h-100 py-2 shadow-sm border-0" style="background-color: #f8fbff;">
                <div class="card-body p-2 d-flex align-items-center">
                    <div class="mr-3 shadow-sm" style="{{ $iconBoxStyle }}">
                        <i class="{{ $cat['icon'] }}"></i>
                    </div>
                    <div>
                        <div class="text-xs font-weight-bold text-dark text-uppercase mb-0">{{ $cat['name'] }}</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $cat['count'] }}</div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="row mb-4 align-items-center">
        <div class="col-md-6 offset-md-3 d-flex">
             <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-white border-right-0 rounded-left" style="border-color: #d1d3e2;">
                        <i class="fas fa-search text-gray-400"></i>
                    </span>
                </div>
                <input type="text" class="form-control border-left-0" placeholder="Search by product title or category" style="border-color: #d1d3e2;">
            </div>
        </div>
        <div class="col-md-3 d-flex justify-content-end">
            <select class="form-control mr-2" style="width: auto;">
                <option>Product Category</option>
                <option>Men</option>
                <option>Women</option>
            </select>
            <button class="btn text-white" style="background-color: #008080; white-space: nowrap;">
                <i class="fas fa-plus fa-sm"></i> Add Product
            </button>
        </div>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between bg-white">
            <div class="d-flex align-items-center">
                <h6 class="m-0 font-weight-bold text-dark mr-3">
                    <i class="fas fa-cube mr-1 text-secondary"></i> Products List
                </h6>
                <div class="dropdown">
                    <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button">
                        Sort by: A-Z
                    </button>
                </div>
            </div>
            <button class="btn btn-sm btn-outline-secondary">
                <i class="fas fa-download fa-sm"></i> Export CSV
            </button>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table align-middle table-hover mb-0">
                    <thead class="text-white" style="background-color: #008080;">
                        <tr>
                            <th class="pl-4" style="width: 40px;">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="checkAll">
                                    <label class="custom-control-label" for="checkAll"></label>
                                </div>
                            </th>
                            <th>Image</th>
                            <th>Product SKU</th>
                            <th>Product Title</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Available colors</th>
                            <th>Ratings</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- Dummy Rows to Match Image --}}
                        @for ($i = 0; $i < 9; $i++)
                        <tr>
                            <td class="pl-4 align-middle">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="check{{$i}}">
                                    <label class="custom-control-label" for="check{{$i}}"></label>
                                </div>
                            </td>
                            <td class="align-middle">
                                <div style="width: 40px; height: 40px; background-color: #ddd; border-radius: 4px; overflow: hidden;">
                                    <img src="https://via.placeholder.com/40" alt="Product" style="width: 100%; height: 100%; object-fit: cover;">
                                </div>
                            </td>
                            <td class="align-middle text-secondary">AB12</td>
                            <td class="align-middle">100% Cotton Basic T-shirt Combo Pack</td>
                            <td class="align-middle">Men</td>
                            <td class="align-middle font-weight-bold">৳749.99</td>
                            <td class="align-middle">4</td>
                            <td class="align-middle text-warning" style="font-size: 0.9rem;">
                                <i class="fas fa-star"></i> <span class="text-secondary">3.5</span>
                            </td>
                            <td class="align-middle">
                                <div class="d-flex">
                                    <a href="#" class="btn btn-sm text-primary p-1"><i class="fas fa-pen"></i></a>
                                    <a href="#" class="btn btn-sm text-secondary p-1"><i class="fas fa-eye"></i></a>
                                    <a href="#" class="btn btn-sm text-danger p-1"><i class="fas fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                        @endfor
                    </tbody>
                </table>
            </div>
            
            <div class="d-flex justify-content-center py-3 border-top">
                <nav aria-label="Page navigation example">
                    <ul class="pagination mb-0">
                        <li class="page-item">
                            <a class="page-link border-0 text-secondary" href="#" aria-label="Previous">
                                <span aria-hidden="true">&lsaquo;</span>
                            </a>
                        </li>
                        <li class="page-item active"><a class="page-link border-0 bg-teal" style="background-color: #008080; color: white;" href="#">1</a></li>
                        <li class="page-item"><a class="page-link border-0 text-secondary" href="#">2</a></li>
                        <li class="page-item"><a class="page-link border-0 text-secondary" href="#">...</a></li>
                        <li class="page-item"><a class="page-link border-0 text-secondary" href="#">75</a></li>
                        <li class="page-item">
                            <a class="page-link border-0 text-secondary" href="#" aria-label="Next">
                                <span aria-hidden="true">&rsaquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>

        </div>
    </div>

@endsection

@push('styles')
<style>
    /* Add any custom minor tweaks here if bootstrap default isn't enough */
    .table thead th {
        border-bottom: 0;
        font-weight: 500;
        font-size: 0.9rem;
    }
    .table tbody td {
        font-size: 0.9rem;
        vertical-align: middle;
    }
    .form-control:focus {
        box-shadow: none;
        border-color: #008080;
    }
</style>
@endpush