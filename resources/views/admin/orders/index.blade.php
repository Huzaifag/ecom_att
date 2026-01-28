@extends('admin.layouts.main')

@section('title', 'Product List')

@section('content')

    <div class="container-fluid py-4">

        <!-- Header / Controls -->
        <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3">
            <h4 class="mb-0">Orders Overview</h4>
            <div class="d-flex gap-2">
                <button class="btn btn-outline-secondary">Add / Cancel Entry</button>
                <a href="{{ route('admin.orders.create') }}" class="btn btn-primary">+ Create</a>
            </div>
        </div>

        <!-- Stats Cards -->
        <div class="row g-3 mb-4">
            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                <div class="card card-stat shadow-sm border-0 bg-white h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold mb-1">Total Orders</h5>
                        <h3 class="mb-1">1248</h3>
                        <small class="text-success">+23% this month</small>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                <div class="card card-stat shadow-sm border-0 bg-white h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold mb-1">Total Processing</h5>
                        <h3 class="mb-1">156</h3>
                        <small class="text-warning">+53% in last month</small>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                <div class="card card-stat shadow-sm border-0 bg-white h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold mb-1">Shipped Orders</h5>
                        <h3 class="mb-1">70</h3>
                        <small class="text-success">+31% in last month</small>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                <div class="card card-stat shadow-sm border-0 bg-white h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold mb-1">Delivered Orders</h5>
                        <h3 class="mb-1">70</h3>
                        <small class="text-success">+31% in last month</small>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                <div class="card card-stat shadow-sm border-0 bg-white h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold mb-1">Cancelled Orders</h5>
                        <h3 class="mb-1">15</h3>
                        <small class="text-danger">-27% from last month</small>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                <div class="card card-stat shadow-sm border-0 bg-white h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold mb-1">Returned Orders</h5>
                        <h3 class="mb-1">15</h3>
                        <small class="text-warning">-7% from last month</small>
                    </div>
                </div>
            </div>
        </div>

        <!-- Table Controls -->
        <div class="d-flex justify-content-between align-items-center mb-3 flex-wrap gap-3">
            <div class="d-flex align-items-center gap-3">
                <div class="input-group" style="width: 260px;">
                    <span class="input-group-text"><i class="bi bi-calendar3"></i></span>
                    <input type="text" class="form-control" value="28 Dec 2025 - 03 Jan 2026" readonly>
                </div>
                <input type="text" class="form-control" placeholder="Search order id or customer" style="width: 260px;">
            </div>

            <div class="d-flex gap-2">
                <select class="form-select" style="width: auto;">
                    <option>Sort by status</option>
                    <option>Processing</option>
                    <option>Shipped</option>
                    <option>Delivered</option>
                    <option>Cancelled</option>
                    <option>Returned</option>
                </select>
                <button class="btn btn-outline-secondary">Export CSV</button>
            </div>
        </div>

        <!-- Orders Table -->
        <div class="card shadow-sm border-0">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover mb-0 align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>Order ID</th>
                                <th>RN</th>
                                <th>Processing</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th>Advance</th>
                                <th>Pay Type</th>
                                <th>Status</th>
                                <th class="text-end">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>3744068</td>
                                <td>AI</td>
                                <td>In Transit</td>
                                <td>awan 2</td>
                                <td>14,995</td>
                                <td>14,995</td>
                                <td>makh</td>
                                <td><span class="badge bg-primary status-badge">Processing</span></td>
                                <td class="text-end action-btn"><button class="btn btn-sm btn-outline-primary">View</button>
                                </td>
                            </tr>
                            <tr>
                                <td>3744068</td>
                                <td>AB</td>
                                <td>Delivered</td>
                                <td>awan 2</td>
                                <td>14,995</td>
                                <td>14,995</td>
                                <td>COD</td>
                                <td><span class="badge bg-success status-badge">Delivered</span></td>
                                <td class="text-end"><button class="btn btn-sm btn-outline-primary">View</button></td>
                            </tr>
                            <tr>
                                <td>3744068</td>
                                <td>AB</td>
                                <td>Cancelled</td>
                                <td>awan 2</td>
                                <td>14,995</td>
                                <td>14,995</td>
                                <td>makh</td>
                                <td><span class="badge bg-danger status-badge">Cancelled</span></td>
                                <td class="text-end"><button class="btn btn-sm btn-outline-primary">View</button></td>
                            </tr>
                            <tr>
                                <td>3744068</td>
                                <td>AB</td>
                                <td>Returned</td>
                                <td>Kinca awan 2</td>
                                <td>14,995</td>
                                <td>14,995</td>
                                <td>makh</td>
                                <td><span class="badge bg-warning text-dark status-badge">Returned</span></td>
                                <td class="text-end"><button class="btn btn-sm btn-outline-primary">View</button></td>
                            </tr>
                            <!-- Add more rows as needed -->
                            <tr>
                                <td>3744068</td>
                                <td>AB12</td>
                                <td>—</td>
                                <td>Kinca Awan 2</td>
                                <td>14,995</td>
                                <td>14,995</td>
                                <td>makh</td>
                                <td><span class="badge bg-success status-badge">Delivered</span></td>
                                <td class="text-end"><button class="btn btn-sm btn-outline-primary">View</button></td>
                            </tr>
                            <!-- ... more rows ... -->
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Pagination -->
            <div class="card-footer bg-white border-0">
                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center mb-0">
                        <li class="page-item disabled"><a class="page-link" href="#">«</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">...</a></li>
                        <li class="page-item"><a class="page-link" href="#">75</a></li>
                        <li class="page-item"><a class="page-link" href="#">76</a></li>
                        <li class="page-item"><a class="page-link" href="#">77</a></li>
                        <li class="page-item"><a class="page-link" href="#">»</a></li>
                    </ul>
                </nav>
            </div>
        </div>

    </div>

@endsection

@push('styles')
    <style>
        .card-stat {
            border-radius: 8px;
            transition: transform 0.2s;
        }

        .card-stat:hover {
            transform: translateY(-3px);
        }

        .status-badge {
            font-size: 0.85rem;
            padding: 0.35em 0.75em;
            border-radius: 1rem;
        }

        .table th,
        .table td {
            vertical-align: middle;
        }

        .action-btn {
            white-space: nowrap;
        }

        .pagination .page-item .page-link {
            border-radius: 5px;
            margin: 0 3px;
        }

        .text-processing {
            color: #0d6efd;
        }

        .text-shipped {
            color: #198754;
        }

        .text-delivered {
            color: #198754;
        }

        .text-cancelled {
            color: #dc3545;
        }

        .text-returned {
            color: #fd7e14;
        }
    </style>
@endpush