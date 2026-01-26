<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In - Softstyle</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    
    <style>
        :root {
            --brand-teal: #0F6973; /* Matches the logo teal */
            --brand-text-gray: #6c757d;
            --input-bg: #F5F7F9; /* Light gray background for inputs */
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

        /* Card Styling */
        .signin-card {
            background-color: #fff;
            border: none;
            border-radius: 30px; /* Rounded corners */
            box-shadow: 0px 10px 40px rgba(0, 0, 0, 0.05); /* Soft shadow */
            max-width: 480px;
            width: 100%;
            padding: 3rem;
        }

        .logo-img {
            max-height: 50px;
            width: auto;
        }

        h2.signin-heading {
            font-weight: 700;
            color: #212529;
            font-size: 2rem;
            margin-top: 1rem;
        }

        p.signin-text {
            color: var(--brand-text-gray);
            font-size: 0.95rem;
            line-height: 1.5;
            margin-bottom: 2rem;
        }

        /* Form Label Styling */
        .form-label {
            font-weight: 600;
            font-size: 0.9rem;
            color: #333;
            margin-bottom: 8px;
        }

        .required-star {
            color: #dc3545; /* Red asterisk */
            margin-left: 2px;
        }

        /* Input Field Styling */
        .custom-input {
            background-color: var(--input-bg);
            border: 1px solid transparent; /* No visible border by default */
            border-radius: 10px;
            padding: 0.8rem 1rem;
            font-size: 0.95rem;
            color: #495057;
            transition: all 0.3s ease;
        }
        
        .custom-input:focus {
            background-color: #fff;
            border-color: var(--brand-teal);
            box-shadow: 0 0 0 3px rgba(15, 105, 115, 0.1);
        }

        .custom-input::placeholder {
            color: #adb5bd;
            font-size: 0.9rem;
        }

        /* Password Input Group (to merge icon and input) */
        .password-group .custom-input {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
            border-right: none;
        }

        .password-group .input-group-text {
            background-color: var(--input-bg);
            border: 1px solid transparent;
            border-left: none;
            border-top-right-radius: 10px;
            border-bottom-right-radius: 10px;
            color: #6c757d;
            cursor: pointer;
        }

        /* Focus state for password group wrapper simulation */
        .password-group:focus-within .custom-input,
        .password-group:focus-within .input-group-text {
            background-color: #fff;
            border-color: var(--brand-teal);
        }

        /* Checkbox Styling */
        .form-check-input {
            width: 1.1em;
            height: 1.1em;
            border-radius: 4px;
            border: 1px solid #ced4da;
        }
        .form-check-input:checked {
            background-color: var(--brand-teal);
            border-color: var(--brand-teal);
        }
        .form-check-label {
            font-size: 0.9rem;
            color: #495057;
            padding-top: 1px;
        }

        /* Forgot Password Link */
        .forgot-link {
            font-size: 0.9rem;
            color: var(--brand-teal);
            text-decoration: none;
            font-weight: 500;
        }
        .forgot-link:hover {
            color: #0a4d55;
            text-decoration: underline;
        }

        /* Login Button */
        .btn-login {
            background-color: var(--brand-teal);
            border: none;
            color: white;
            font-weight: 600;
            font-size: 1rem;
            padding: 0.8rem;
            border-radius: 8px;
            width: 100%;
            margin-top: 1rem;
            transition: background-color 0.3s ease;
        }

        .btn-login:hover {
            background-color: #0a4d55;
            color: white;
        }

    </style>
</head>
<body>

    <div class="main-container">
        <div class="card signin-card">
            <div class="card-body p-0">
                
                <div class="text-center">
                    <div class="mb-3">
                        <img src="{{ asset('images/website/logo-2.png') }}" alt="Admin Logo" style="width: 100%; height: 40px;">
                    </div>
                    <h2 class="signin-heading mb-2">Sign In</h2>
                    <p class="signin-text px-4">
                        Select your role to get started and access the features to your needs.
                    </p>
                </div>

                <form method="POST" action="{{ $role === 'admin' ? route('admin.login') : route('login') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="emailInput" class="form-label">Email or Mobile Number <span class="required-star">*</span></label>
                        <input type="email" class="form-control custom-input @error('email') is-invalid @enderror" id="emailInput" name="email" value="{{ old('email') }}" placeholder="Enter your email" required>
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="passwordInput" class="form-label">Password <span class="required-star">*</span></label>
                        <div class="input-group password-group">
                            <input type="password" class="form-control custom-input @error('password') is-invalid @enderror" id="passwordInput" name="password" placeholder="Enter your password" required>
                            <span class="input-group-text" id="togglePassword">
                                <i class="bi bi-eye-slash"></i>
                            </span>
                        </div>
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="rememberMe" name="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="rememberMe">
                                Remember me
                            </label>
                        </div>
                        <a href="#" class="forgot-link">Forget Password?</a>
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-login">{{ ucfirst($role) }} Login</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#passwordInput');
        const icon = togglePassword.querySelector('i');

        togglePassword.addEventListener('click', function (e) {
            // Toggle the type attribute
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            
            // Toggle the eye icon
            if (type === 'text') {
                icon.classList.remove('bi-eye-slash');
                icon.classList.add('bi-eye');
            } else {
                icon.classList.remove('bi-eye');
                icon.classList.add('bi-eye-slash');
            }
        });
    </script>
</body>
</html>