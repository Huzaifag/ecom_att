@extends('admin.layouts.main')

@section('title', 'Overview')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Overview</h1>
    </div>

    <div class="row">

        <div class="col-xl-2 col-md-4 col-6 mb-4">
            <div class="card border-0 shadow-sm h-100 py-2">
                <div class="card-body p-2">
                    <div class="d-flex align-items-center">
                        <div class="rounded p-3 mr-2" style="background-color: #e6fdf2; color: #20c997;">
                            <i class="fas fa-dollar-sign fa-lg"></i>
                        </div>
                        <div>
                            <div class="text-xs font-weight-bold text-muted text-uppercase mb-1">Total Revenue</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">৳74679</div>
                            <small class="text-success" style="font-size: 10px;">33.1k in last month</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-2 col-md-4 col-6 mb-4">
            <div class="card border-0 shadow-sm h-100 py-2">
                <div class="card-body p-2">
                    <div class="d-flex align-items-center">
                        <div class="rounded p-3 mr-2" style="background-color: #e1f0ff; color: #3699ff;">
                            <i class="fas fa-shopping-cart fa-lg"></i>
                        </div>
                        <div>
                            <div class="text-xs font-weight-bold text-muted text-uppercase mb-1">Total Orders</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">1248</div>
                            <small class="text-success" style="font-size: 10px;">33.1k in last month</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-2 col-md-4 col-6 mb-4">
            <div class="card border-0 shadow-sm h-100 py-2">
                <div class="card-body p-2">
                    <div class="d-flex align-items-center">
                        <div class="rounded p-3 mr-2" style="background-color: #fff4de; color: #ffa800;">
                            <i class="fas fa-spinner fa-lg"></i>
                        </div>
                        <div>
                            <div class="text-xs font-weight-bold text-muted text-uppercase mb-1">Total Processing</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">156</div>
                            <small class="text-success" style="font-size: 10px;">33.1k in last month</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-2 col-md-4 col-6 mb-4">
            <div class="card border-0 shadow-sm h-100 py-2">
                <div class="card-body p-2">
                    <div class="d-flex align-items-center">
                        <div class="rounded p-3 mr-2" style="background-color: #e1f0ff; color: #007bff;">
                            <i class="fas fa-check-square fa-lg"></i>
                        </div>
                        <div>
                            <div class="text-xs font-weight-bold text-muted text-uppercase mb-1">Shipped Orders</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">70</div>
                            <small class="text-success" style="font-size: 10px;">33.1k in last month</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-2 col-md-4 col-6 mb-4">
            <div class="card border-0 shadow-sm h-100 py-2">
                <div class="card-body p-2">
                    <div class="d-flex align-items-center">
                        <div class="rounded p-3 mr-2" style="background-color: #e6fdf2; color: #20c997;">
                            <i class="fas fa-check fa-lg"></i>
                        </div>
                        <div>
                            <div class="text-xs font-weight-bold text-muted text-uppercase mb-1">Delivered Orders</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">70</div>
                            <small class="text-success" style="font-size: 10px;">33.1k in last month</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-2 col-md-4 col-6 mb-4">
            <div class="card border-0 shadow-sm h-100 py-2">
                <div class="card-body p-2">
                    <div class="d-flex align-items-center">
                        <div class="rounded p-3 mr-2" style="background-color: #ffe2e5; color: #f64e60;">
                            <i class="fas fa-times fa-lg"></i>
                        </div>
                        <div>
                            <div class="text-xs font-weight-bold text-muted text-uppercase mb-1">Cancelled Orders</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">15</div>
                            <small class="text-danger" style="font-size: 10px;">-2% from last month</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">

        <div class="col-xl-8 col-lg-7">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between bg-white">
                    <h6 class="m-0 font-weight-bold text-dark">
                        <i class="fas fa-cube mr-2 text-secondary"></i> Sales Summary
                    </h6>
                    <div class="d-flex align-items-center">
                        <select class="form-control form-control-sm mr-2 shadow-none border-gray-300" style="width: auto; font-size: 0.8rem;">
                            <option>This Week</option>
                            <option>This Month</option>
                        </select>
                        <div class="input-group input-group-sm" style="width: 180px;">
                            <input type="text" class="form-control border-gray-300 shadow-none" value="28 Dec 2025 - 3 Dec 2026" readonly style="font-size: 0.8rem;">
                            <div class="input-group-append">
                                <span class="input-group-text bg-white border-gray-300"><i class="far fa-calendar-alt"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="salesSummaryChart"></canvas>
                    </div>
                    <div class="mt-2 text-center small">
                        <span class="mr-2"><i class="fas fa-square text-primary"></i> Gross margin</span>
                        <span class="mr-2"><i class="fas fa-square" style="color: #b3cbf2;"></i> Revenue</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-lg-5">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between bg-white">
                    <h6 class="m-0 font-weight-bold text-dark">
                        <i class="fas fa-globe mr-2 text-secondary"></i> Total Customers
                    </h6>
                    <div class="dropdown no-arrow">
                         <select class="form-control form-control-sm shadow-none border-gray-300" style="width: auto; font-size: 0.8rem;">
                            <option>This Month</option>
                        </select>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart-pie pt-4 pb-2 position-relative">
                        <canvas id="totalCustomersChart"></canvas>
                        <div class="position-absolute w-100 text-center" style="top: 50%; left: 0; transform: translateY(-50%); pointer-events: none;">
                            <h3 class="font-weight-bold text-dark mb-0">82.5%</h3>
                        </div>
                    </div>
                    <div class="mt-4 small">
                        <div class="d-flex align-items-center mb-2">
                             <i class="fas fa-square mr-2" style="color: #6f7ead; font-size: 1.2rem;"></i>
                             <span>Regular Customer</span>
                        </div>
                         <div class="d-flex align-items-center">
                             <i class="fas fa-square mr-2" style="color: #20c997; font-size: 1.2rem;"></i>
                             <span>New and Unique Visitor Customer</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between bg-white">
                    <h6 class="m-0 font-weight-bold text-dark">
                        <i class="fas fa-cube mr-2 text-secondary"></i> Recent Orders
                    </h6>
                    <button class="btn btn-light btn-sm border">View All</button>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table align-middle table-hover mb-0">
                            <thead style="background-color: #008080;" class="text-white">
                                <tr>
                                    <th class="py-3">Order ID</th>
                                    <th class="py-3">Product SKU</th>
                                    <th class="py-3">Name</th>
                                    <th class="py-3">Quantity</th>
                                    <th class="py-3">Total</th>
                                    <th class="py-3">Advance</th>
                                    <th class="py-3">Pay Type</th>
                                    <th class="py-3">Status</th>
                                    <th class="py-3">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- Looping 6 times to match image rows --}}
                                @for ($i = 0; $i < 6; $i++)
                                <tr>
                                    <td class="py-3">374068</td>
                                    <td class="py-3">AB12</td>
                                    <td class="py-3">Kinza Awan</td>
                                    <td class="py-3">2</td>
                                    <td class="py-3">৳4505</td>
                                    <td class="py-3">৳4505</td>
                                    <td class="py-3">bKash</td>
                                    <td class="py-3">
                                        <span class="badge bg-white text-warning border border-warning px-3 py-2 rounded-pill font-weight-normal" style="font-size: 12px;">Processing</span>
                                    </td>
                                    <td class="py-3">
                                        <button class="btn btn-outline-info btn-sm px-3 rounded-pill">
                                            <i class="fas fa-eye"></i> View
                                        </button>
                                    </td>
                                </tr>
                                @endfor
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        // --- CHART.JS CONFIGURATIONS ---
        Chart.defaults.font.family = 'Nunito, -apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
        Chart.defaults.color = '#858796';

        // 1. Sales Summary Bar Chart
        var ctxBar = document.getElementById("salesSummaryChart");
        if (ctxBar) {
            new Chart(ctxBar, {
                type: 'bar',
                data: {
                    labels: ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
                    datasets: [
                        {
                            label: "Gross margin",
                            backgroundColor: "#4e73df", // Blue
                            hoverBackgroundColor: "#2e59d9",
                            borderColor: "#4e73df",
                            data: [70, 20, 70, 70, 80, 70, 15],
                            barPercentage: 0.6,
                            categoryPercentage: 0.7,
                            borderRadius: 4
                        },
                        {
                            label: "Revenue",
                            backgroundColor: "#dae6fd", // Light Blue
                            hoverBackgroundColor: "#c2d8fc",
                            borderColor: "#dae6fd",
                            data: [130, 70, 130, 90, 90, 130, 25],
                            barPercentage: 0.6,
                            categoryPercentage: 0.7,
                            borderRadius: 4
                        }
                    ]
                },
                options: {
                    maintainAspectRatio: false,
                    layout: { padding: { left: 10, right: 25, top: 25, bottom: 0 } },
                    scales: {
                        x: {
                            grid: { display: false, drawBorder: false },
                            ticks: { maxTicksLimit: 7 }
                        },
                        y: {
                            ticks: {
                                maxTicksLimit: 5,
                                padding: 10,
                                callback: function(value) { return value + 'k'; }
                            },
                            grid: {
                                color: "rgb(234, 236, 244)",
                                zeroLineColor: "rgb(234, 236, 244)",
                                drawBorder: false,
                                borderDash: [2],
                                zeroLineBorderDash: [2]
                            }
                        }
                    },
                    plugins: {
                        legend: { display: false }, // Custom legend used in HTML
                        tooltip: {
                            backgroundColor: "rgb(255,255,255)",
                            bodyColor: "#858796",
                            titleColor: '#6e707e',
                            borderColor: '#dddfeb',
                            borderWidth: 1,
                            xPadding: 15,
                            yPadding: 15,
                            displayColors: false,
                            intersect: false,
                            mode: 'index',
                            caretPadding: 10,
                        }
                    }
                }
            });
        }

        // 2. Total Customers Doughnut Chart
        var ctxPie = document.getElementById("totalCustomersChart");
        if (ctxPie) {
            new Chart(ctxPie, {
                type: 'doughnut',
                data: {
                    labels: ["Regular Customer", "New and Unique"],
                    datasets: [{
                        data: [82.5, 17.5],
                        backgroundColor: ['#6f7ead', '#20c997'], // Purpleish, Green
                        hoverBackgroundColor: ['#5a6b99', '#17a673'],
                        hoverBorderColor: "rgba(234, 236, 244, 1)",
                    }],
                },
                options: {
                    maintainAspectRatio: false,
                    tooltips: {
                        backgroundColor: "rgb(255,255,255)",
                        bodyFontColor: "#858796",
                        borderColor: '#dddfeb',
                        borderWidth: 1,
                        xPadding: 15,
                        yPadding: 15,
                        displayColors: false,
                        caretPadding: 10,
                    },
                    plugins: {
                        legend: { display: false },
                        tooltip: { enabled: false } // Disable tooltip to keep static text focus
                    },
                    cutout: '80%',
                },
            });
        }
    });
</script>
@endpush