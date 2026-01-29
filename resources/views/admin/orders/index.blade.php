@extends('admin.layouts.main')

@section('title', 'Orders Overview')

@section('content')

    @push('styles')
    <style>
        :root {
            --primary-teal: #00897b;
            --light-teal: #e0f2f1;
            --primary-purple: #8e24aa;
            --light-purple: #f3e5f5;
        }

        body {
            background-color: #f8f9fa;
        }

        /* Top Action Buttons */
        .btn-custom-outline-purple {
            color: var(--primary-purple);
            border: 1px solid var(--primary-purple);
            background: white;
            font-weight: 500;
        }
        
        .btn-custom-teal {
            background-color: var(--primary-teal);
            color: white;
            border: none;
            font-weight: 500;
        }
        .btn-custom-teal:hover {
            background-color: #00796b;
            color: white;
        }

        /* Stats Cards */
        .stat-card {
            border: none;
            border-radius: 12px;
            padding: 15px;
        }
        
        .icon-box {
            width: 48px;
            height: 48px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.25rem;
            margin-right: 15px;
        }

        /* Stat Colors */
        .stat-blue .icon-box { background-color: #e3f2fd; color: #1976d2; }
        .stat-yellow .icon-box { background-color: #fffde7; color: #fbc02d; }
        .stat-sky .icon-box { background-color: #e1f5fe; color: #0288d1; }
        .stat-green .icon-box { background-color: #e8f5e9; color: #388e3c; }
        .stat-red .icon-box { background-color: #ffebee; color: #d32f2f; }
        .stat-purple .icon-box { background-color: #f3e5f5; color: #7b1fa2; }

        .stat-title { font-size: 0.9rem; color: #6c757d; font-weight: 500; }
        .stat-value { font-size: 1.5rem; font-weight: 700; color: #333; line-height: 1.2; }
        .stat-note { font-size: 0.75rem; }

        /* Search & Date */
        .search-container {
            background: white;
            border-radius: 8px;
            padding: 10px;
            margin-bottom: 20px;
        }

        /* Table Styling */
        .table-card {
            border-radius: 12px;
            overflow: hidden;
            border: none;
        }

        .table-header-teal {
            background-color: var(--primary-teal) !important;
            color: white;
        }
        
        .table-header-teal th {
            font-weight: 500;
            border: none;
            padding: 12px 15px;
            background-color: var(--primary-teal); /* Force bg */
            color: white;
        }

        .table tbody tr td {
            vertical-align: middle;
            padding: 12px 15px;
            border-bottom: 1px solid #f0f0f0;
            font-size: 0.95rem;
            color: #444;
        }

        /* Status Pills (Outlined) */
        .status-pill {
            padding: 4px 12px;
            border-radius: 6px;
            font-size: 0.85rem;
            font-weight: 500;
            display: inline-block;
            text-align: center;
            min-width: 80px;
            background: transparent;
            border: 1px solid #ccc;
        }

        .status-processing { border-color: #ffb74d; color: #ff9800; }
        .status-shipped { border-color: #4fc3f7; color: #039be5; }
        .status-delivered { border-color: #81c784; color: #43a047; }
        .status-cancelled { border-color: #e57373; color: #e53935; }
        .status-returned { border-color: #ff8a65; color: #f4511e; }

        /* Action Buttons */
        .btn-view {
            border: 1px solid #6c757d;
            color: #6c757d;
            padding: 2px 10px;
            font-size: 0.85rem;
            border-radius: 4px;
        }
        .btn-view:hover {
            background-color: #6c757d;
            color: white;
        }

        .pagination .page-link {
            color: #333;
            border: 1px solid #dee2e6;
            margin: 0 2px;
            border-radius: 4px;
        }
        .pagination .active .page-link {
            background-color: var(--primary-teal);
            border-color: var(--primary-teal);
            color: white;
        }
    </style>
    @endpush

    <div class="container-fluid py-4">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h4 class="fw-bold mb-0">Orders Overview</h4>
            <div class="d-flex gap-3">
                <button class="btn btn-custom-outline-purple px-4">Add Return / Cancel Entry</button>
                <a href="{{ route('admin.orders.create') }}" class="btn btn-custom-teal px-4"><i class="bi bi-plus-lg me-1"></i> Create Order</a>
            </div>
        </div>

        <div class="row g-3 mb-4">
            <div class="col-xl-2 col-md-4 col-sm-6">
                <div class="card stat-card shadow-sm h-100 stat-blue">
                    <div class="d-flex align-items-start">
                        <div class="icon-box">
                            <i class="bi bi-cart"></i>
                        </div>
                        <div>
                            <div class="stat-title">Total Orders</div>
                            <div class="stat-value">1248</div>
                            <div class="stat-note text-success">33.1k in last month</div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-xl-2 col-md-4 col-sm-6">
                <div class="card stat-card shadow-sm h-100 stat-yellow">
                    <div class="d-flex align-items-start">
                        <div class="icon-box">
                            <i class="bi bi-brightness-high"></i>
                        </div>
                        <div>
                            <div class="stat-title">Total Processing</div>
                            <div class="stat-value">156</div>
                            <div class="stat-note text-success">33.1k in last month</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-2 col-md-4 col-sm-6">
                <div class="card stat-card shadow-sm h-100 stat-sky">
                    <div class="d-flex align-items-start">
                        <div class="icon-box">
                            <i class="bi bi-check-lg"></i>
                        </div>
                        <div>
                            <div class="stat-title">Shipped Orders</div>
                            <div class="stat-value">70</div>
                            <div class="stat-note text-success">33.1k in last month</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-2 col-md-4 col-sm-6">
                <div class="card stat-card shadow-sm h-100 stat-green">
                    <div class="d-flex align-items-start">
                        <div class="icon-box">
                            <i class="bi bi-check2-circle"></i>
                        </div>
                        <div>
                            <div class="stat-title">Delivered Orders</div>
                            <div class="stat-value">70</div>
                            <div class="stat-note text-success">33.1k in last month</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-2 col-md-4 col-sm-6">
                <div class="card stat-card shadow-sm h-100 stat-red">
                    <div class="d-flex align-items-start">
                        <div class="icon-box">
                            <i class="bi bi-x-lg"></i>
                        </div>
                        <div>
                            <div class="stat-title">Cancelled Orders</div>
                            <div class="stat-value">15</div>
                            <div class="stat-note text-danger">-2% from last month</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-2 col-md-4 col-sm-6">
                <div class="card stat-card shadow-sm h-100 stat-purple">
                    <div class="d-flex align-items-start">
                        <div class="icon-box">
                            <i class="bi bi-arrow-counterclockwise"></i>
                        </div>
                        <div>
                            <div class="stat-title">Returned Orders</div>
                            <div class="stat-value">15</div>
                            <div class="stat-note text-danger">-1% from last month</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-12">
                <div class="d-flex justify-content-center align-items-center gap-3">
                     <div class="input-group" style="max-width: 500px;">
                        <span class="input-group-text bg-white border-end-0"><i class="bi bi-search"></i></span>
                        <input type="text" class="form-control border-start-0 ps-0" placeholder="Search by order id or customer">
                    </div>
                    <div class="ms-auto bg-white rounded border p-2 d-flex align-items-center" style="min-width: 250px;">
                        <span class="me-2 text-muted">28 Dec 2025 - 3 Dec 2026</span>
                        <i class="bi bi-calendar ms-auto text-muted"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="card table-card shadow-sm">
            <div class="card-header bg-white border-0 py-3 d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center gap-2">
                    <i class="bi bi-box-seam text-secondary"></i>
                    <h6 class="mb-0 fw-bold">Orders List</h6>
                    <div class="dropdown ms-3">
                        <button class="btn btn-sm btn-light border dropdown-toggle" type="button" data-bs-toggle="dropdown">
                            Sort by status
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Processing</a></li>
                            <li><a class="dropdown-item" href="#">Shipped</a></li>
                            <li><a class="dropdown-item" href="#">Delivered</a></li>
                        </ul>
                    </div>
                </div>
                <button class="btn btn-sm btn-outline-secondary"><i class="bi bi-download me-1"></i> Export CSV</button>
            </div>

            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead class="table-header-teal">
                            <tr>
                                <th>Order ID</th>
                                <th>Product</th>
                                <th>Customer</th>
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
                                <td>374068</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="bg-light rounded me-2" style="width:30px;height:30px;"></div>
                                        <span>AB12</span>
                                    </div>
                                </td>
                                <td>Kinza Awan</td>
                                <td>2</td>
                                <td>14505</td>
                                <td>14505</td>
                                <td>bKash</td>
                                <td><span class="status-pill status-processing">Processing</span></td>
                                <td class="text-end"><button class="btn btn-view bg-white"><i class="bi bi-eye"></i> View</button></td>
                            </tr>
                            
                            <tr>
                                <td>374068</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="bg-light rounded me-2" style="width:30px;height:30px;"></div>
                                        <span>AB12</span>
                                    </div>
                                </td>
                                <td>Kinza Awan</td>
                                <td>2</td>
                                <td>14505</td>
                                <td>14505</td>
                                <td>COD</td>
                                <td><span class="status-pill status-processing">Processing</span></td>
                                <td class="text-end"><button class="btn btn-view bg-white"><i class="bi bi-eye"></i> View</button></td>
                            </tr>

                            <tr>
                                <td>374068</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="bg-light rounded me-2" style="width:30px;height:30px;"></div>
                                        <span>AB12</span>
                                    </div>
                                </td>
                                <td>Kinza Awan</td>
                                <td>2</td>
                                <td>14505</td>
                                <td>14505</td>
                                <td>bKash</td>
                                <td><span class="status-pill status-shipped">Shipped</span></td>
                                <td class="text-end"><button class="btn btn-view bg-white"><i class="bi bi-eye"></i> View</button></td>
                            </tr>

                            <tr>
                                <td>374068</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="bg-light rounded me-2" style="width:30px;height:30px;"></div>
                                        <span>AB12</span>
                                    </div>
                                </td>
                                <td>Kinza Awan</td>
                                <td>2</td>
                                <td>14505</td>
                                <td>14505</td>
                                <td>bKash</td>
                                <td><span class="status-pill status-delivered">Delivered</span></td>
                                <td class="text-end"><button class="btn btn-view bg-white"><i class="bi bi-eye"></i> View</button></td>
                            </tr>

                            <tr>
                                <td>374068</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="bg-light rounded me-2" style="width:30px;height:30px;"></div>
                                        <span>AB12</span>
                                    </div>
                                </td>
                                <td>Kinza Awan</td>
                                <td>2</td>
                                <td>14505</td>
                                <td>14505</td>
                                <td>bKash</td>
                                <td><span class="status-pill status-cancelled">Cancelled</span></td>
                                <td class="text-end"><button class="btn btn-view bg-white"><i class="bi bi-eye"></i> View</button></td>
                            </tr>
                             <tr>
                                <td>374068</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="bg-light rounded me-2" style="width:30px;height:30px;"></div>
                                        <span>AB12</span>
                                    </div>
                                </td>
                                <td>Kinza Awan</td>
                                <td>2</td>
                                <td>14505</td>
                                <td>14505</td>
                                <td>bKash</td>
                                <td><span class="status-pill status-returned">Returned</span></td>
                                <td class="text-end"><button class="btn btn-view bg-white"><i class="bi bi-eye"></i> View</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card-footer bg-white py-3">
                 <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center mb-0">
                        <li class="page-item disabled"><a class="page-link" href="#"><i class="bi bi-chevron-left"></i></a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item disabled"><a class="page-link" href="#">...</a></li>
                        <li class="page-item"><a class="page-link" href="#">75</a></li>
                        <li class="page-item"><a class="page-link" href="#">76</a></li>
                        <li class="page-item"><a class="page-link" href="#">77</a></li>
                        <li class="page-item"><a class="page-link" href="#"><i class="bi bi-chevron-right"></i></a></li>
                    </ul>
                </nav>
            </div>
        </div>

    </div>

@endsection