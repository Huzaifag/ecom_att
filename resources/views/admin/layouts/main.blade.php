<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard')</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>
        :root {
            /* COLOR PALETTE - Edit these to match your image exactly */
            --primary-color: #4e73df;
            --secondary-color: #858796;
            --success-color: #1cc88a;
            --info-color: #36b9cc;
            --warning-color: #f6c23e;
            --danger-color: #e74a3b;
            --light-bg: #f8f9fc;
            --sidebar-bg: #4e73df;
            /* Often dark blue or black in dashboards */
            --sidebar-text: #ffffff;
            --card-shadow: 0 .15rem 1.75rem 0 rgba(58, 59, 69, .15);
        }

        body {
            font-family: 'Nunito', sans-serif;
            background-color: var(--light-bg);
            overflow-x: hidden;
        }

        /* Wrapper */
        #wrapper {
            display: flex;
            width: 100%;
            align-items: stretch;
            min-height: 100vh;
        }

        /* Sidebar Styling */
        #accordionSidebar {
            width: 300px;
            min-height: 100vh;
            background-color: #fff;
            color: #2D2D2D;
            transition: all 0.3s;
            display: flex;
            flex-direction: column;
        }

        #accordionSidebar.toggled {
            width: 0;
            overflow: hidden;
        }

        .sidebar-brand {
            height: 4.375rem;
            text-decoration: none;
            font-size: 16px;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: .05rem;
            color: #2D2D2D;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1.5rem 1rem;
        }

        .sidebar-brand-icon {
            font-size: 2rem;
            margin-right: 0.5rem;
        }

        .nav-item .nav-link {
            color: #222;
            padding: 0.75rem 1rem;
            display: block;
            width: 100%;
            text-decoration: none;
            font-weight: 500;
            font-size: 16px;
        }

        .nav-item .nav-link:hover {
            color: #111;
        }

        .nav-item .nav-link i {
            margin-right: 0.5rem;
            width: 1.25rem;
            text-align: center;
        }

        .nav-item.active .nav-link {
            color: #fff;
            font-weight: 500;
            font-size: 16px;
            background-color: #008B8B;
            border-radius: 5px;
        }

        .sidebar-divider {
            border-top: 1px solid #eee;
            margin: 0 1rem 1rem;
        }

        .sidebar-heading {
            color: #888;
            font-size: .65rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: .05rem;
            padding: 0 1rem;
            margin-bottom: 0.5rem;
        }

        /* Content Wrapper */
        #content-wrapper {
            background-color: var(--light-bg);
            width: 100%;
            overflow-x: hidden;
            display: flex;
            flex-direction: column;
        }

        /* Topbar */
        .topbar {
            height: 4.375rem;
            background-color: #fff;
            box-shadow: 0 .15rem 1.75rem 0 rgba(58, 59, 69, .15);
            display: flex;
            align-items: center;
            padding: 0 1.5rem;
            justify-content: space-between;
            margin-bottom: 1.5rem;
        }

        .topbar .nav-link {
            color: #d1d3e2;
        }

        /* Content */
        .content {
            flex: 1;
            padding: 0 1.5rem;
        }

        /* Cards */
        .card {
            border: none;
            border-radius: 0.35rem;
            box-shadow: var(--card-shadow);
        }

        .card-header {
            background-color: #f8f9fc;
            border-bottom: 1px solid #e3e6f0;
            padding: 0.75rem 1.25rem;
        }

        .card-body {
            padding: 1.25rem;
        }

        /* Tables */
        .table th {
            border-top: none;
            font-weight: 600;
            color: #858796;
            font-size: 0.8rem;
            text-transform: uppercase;
            letter-spacing: 0.05rem;
        }

        .table td {
            vertical-align: middle;
            font-size: 0.875rem;
        }

        /* Buttons */
        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }

        .btn-primary:hover {
            background-color: #2e59d9;
            border-color: #2653a0;
        }

        /* Utilities */
        .text-primary {
            color: var(--primary-color) !important;
        }

        .bg-gradient-primary {
            background: linear-gradient(180deg, var(--primary-color) 10%, #224abe 100%);
        }

        /* Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        ::-webkit-scrollbar-thumb {
            background: #888;
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }

        /* Responsive */
        @media (max-width: 768px) {
            #accordionSidebar {
                width: 0;
                overflow: hidden;
            }

            #accordionSidebar.toggled {
                width: 300px;
            }

            .topbar {
                padding: 0 1rem;
            }

            .content {
                padding: 0 1rem;
            }
        }
    </style>

    @stack('styles')
</head>

<body id="page-top">
    <div id="wrapper">
        <!-- Sidebar -->
        @include('admin.layouts.sidebar')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Topbar -->
            @include('admin.layouts.topbar')

            <!-- Main Content -->
            <div class="content">
                @yield('content')
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        // Toggle the side navigation
        $("#sidebarToggle, #sidebarToggleTop").on('click', function(e) {
            $("body").toggleClass("sidebar-toggled");
            $(".sidebar").toggleClass("toggled");
            if ($(".sidebar").hasClass("toggled")) {
                $('.sidebar .collapse').collapse('hide');
            };
        });

        // Close any open menu accordions when window is resized below 768px
        $(window).resize(function() {
            if ($(window).width() < 768) {
                $('.sidebar .collapse').collapse('hide');
            };
        });

        // Prevent the content wrapper from scrolling when the fixed side navigation hovered over
        $('body.fixed-nav .sidebar').on('mousewheel DOMMouseScroll wheel', function(e) {
            if ($(window).width() > 768) {
                var e0 = e.originalEvent,
                    delta = e0.wheelDelta || -e0.detail;
                this.scrollTop += (delta < 0 ? 1 : -1) * 30;
                e.preventDefault();
            }
        });
    </script>

    @stack('scripts')
</body>

</html>