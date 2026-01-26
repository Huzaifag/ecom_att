<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In - Softstyle</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    
    <style>
        /* Custom CSS to match the exact design colors and styles */
        :root {
            --brand-teal: #0F6973; /* The specific teal color from the image */
            --brand-teal-light: #E7F3F4; /* The light background for the selected button */
            --brand-gray-bg: #F8F9FA; /* The gray background for unselected buttons */
            --brand-text-gray: #6c757d;
        }

        body {
            background-color: #ffffff;
            font-family: 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
        }

        /* Centering container */
        .main-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        /* Custom Card Styling */
        .signin-card {
            background-color: #fff;
            border: none;
            border-radius: 30px; /* Highly rounded corners */
            box-shadow: 0px 10px 40px rgba(0, 0, 0, 0.05); /* Subtle, soft shadow */
            max-width: 480px;
            width: 100%;
            padding: 3rem;
        }

        .logo-img {
            max-height: 60px;
            width: auto;
        }

        h2.signin-heading {
            font-weight: 700;
            color: #212529;
            font-size: 2rem;
        }

        p.signin-text {
            color: var(--brand-text-gray);
            font-size: 1rem;
            line-height: 1.5;
        }

        /* Role Selection Button Styles */
        .btn-role {
            font-weight: 600;
            font-size: 1.1rem;
            padding: 1rem 1.5rem;
            border-radius: 15px; /* Soft rounded buttons */
            border: 2px solid transparent;
            transition: all 0.3s ease;
            color: var(--brand-text-gray);
            background-color: var(--brand-gray-bg);
        }

        /* Style for the icon inside buttons */
        .btn-role i {
            font-size: 1.4rem;
            margin-right: 12px;
        }

        /* The 'Active' state (matches the "Admin" button in the image) */
        .btn-role.active {
            color: var(--brand-teal);
            background-color: var(--brand-teal-light);
            border-color: var(--brand-teal);
        }

        /* Hover effect for unselected buttons */
        .btn-role:not(.active):hover {
            background-color: #e9ecef;
            color: #495057;
        }

        /* Next Button Styles */
        .btn-next {
            background-color: var(--brand-teal);
            border: none;
            color: white;
            font-weight: 600;
            font-size: 1.1rem;
            padding: 1rem;
            border-radius: 15px;
            transition: background-color 0.3s ease;
        }

        .btn-next:hover {
            background-color: #0a4d55; /* Slightly darker teal on hover */
            color: white;
        }
    </style>
</head>
<body>

    <div class="main-container">
        <div class="card signin-card text-center">
            <div class="card-body p-0">
                <div class="mb-4">
                    <img src="{{ asset('images/website/logo-2.png') }}" alt="Admin Logo" style="width: 100%; height: 40px;">
                </div>

                <h2 class="signin-heading mb-3">Sign In</h2>
                <p class="signin-text mb-5 px-3">
                    Select your role to get started and access the features to your needs.
                </p>

                <div class="d-grid gap-3 mb-5">
                    <button class="btn btn-role active d-flex align-items-center justify-content-center" type="button" data-role="admin">
                        <i class="bi bi-person"></i>
                        Admin
                    </button>
                    
                    <button class="btn btn-role d-flex align-items-center justify-content-center" type="button" data-role="user">
                        <i class="bi bi-person"></i>
                        User
                    </button>
                </div>

                <div class="d-grid">
                    <button class="btn btn-next" type="button" id="role-submit">Next</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        const roleButtons = document.querySelectorAll('.btn-role');
        let selectedRole = 'admin';

        roleButtons.forEach(button => {
            button.addEventListener('click', function() {
                roleButtons.forEach(btn => btn.classList.remove('active'));
                this.classList.add('active');
                selectedRole = this.dataset.role;
            });
        });

        document.getElementById('role-submit').addEventListener('click', function() {
            window.location.href = `/login/${selectedRole}`;
        });
    </script>
</body>
</html>