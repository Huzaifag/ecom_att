<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>SOFTSTYLE - Sign In</title>

  <!-- Bootstrap 5.3 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
        crossorigin="anonymous">

  <style>
    body {
      background-color: #f5f6fa;
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      font-family: system-ui, -apple-system, "Segoe UI", Roboto, sans-serif;
    }

    .login-card {
      background: white;
      border-radius: 16px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
      overflow: hidden;
      max-width: 420px;
      width: 100%;
    }

    .header {
      background: linear-gradient(135deg, #0d6efd 0%, #0b5ed7 100%);
      color: white;
      padding: 2.5rem 1.5rem;
      text-align: center;
    }

    .logo {
      font-weight: 700;
      font-size: 1.75rem;
      margin-bottom: 0.5rem;
      letter-spacing: -0.5px;
    }

    .subtitle {
      font-size: 1rem;
      opacity: 0.9;
      margin: 0;
    }

    .content {
      padding: 2.5rem 2rem;
    }

    .role-btn {
      height: 70px;
      font-size: 1.1rem;
      font-weight: 500;
      border-radius: 12px;
      margin-bottom: 1rem;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 12px;
      transition: all 0.2s;
    }

    .role-btn:hover {
      transform: translateY(-2px);
      box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    }

    .role-btn.user {
      background-color: #0d6efd;
      border-color: #0d6efd;
      color: white;
    }

    .role-btn.user:hover {
      background-color: #0b5ed7;
      border-color: #0a58ca;
    }

    .role-btn.admin {
      background-color: #6610f2;
      border-color: #6610f2;
      color: white;
    }

    .role-btn.admin:hover {
      background-color: #5a0ddb;
      border-color: #520dc2;
    }

    .next-btn {
      padding: 0.9rem 1.5rem;
      font-size: 1.1rem;
      font-weight: 600;
      border-radius: 12px;
      width: 100%;
      margin-top: 1.5rem;
    }
  </style>
</head>
<body>

<div class="login-card">

  <!-- Header -->
  <div class="header">
    <div class="logo">SOFTSTYLE</div>
    <p class="subtitle">Sign In</p>
  </div>

  <!-- Content -->
  <div class="content">

    <h5 class="text-center mb-4 fw-semibold">Select your role</h5>
    
    <p class="text-center text-muted mb-4">
      Select your role to get started and access the features you need.
    </p>

    <button type="button" class="btn btn-outline-secondary role-btn admin w-100">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 16 16">
        <path d="M8 1a2 2 0 0 1 2 2v2H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"/>
      </svg>
      Admin
    </button>

    <button type="button" class="btn btn-outline-primary role-btn user w-100">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 16 16">
        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
      </svg>
      User
    </button>

    <button type="button" class="btn btn-primary next-btn">
      Next
    </button>

  </div>

</div>

<!-- Bootstrap JS (optional - only if you need dropdowns, modals, etc.) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
        crossorigin="anonymous"></script>

</body>
</html>