<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kpop Pocket - Admin Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/admin-dashboard.css') }}">
</head>
<body>

<div class="login-container">
    <!-- Left Side: Cinematic Background -->
    <div class="login-left">
        <div class="floating-light"></div>
        <div style="max-width: 500px;">
            <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 24px; color: #FFFFFF;">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#FF2E93" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 2L2 7l10 5 10-5-10-5z"></path>
                    <path d="M2 17l10 5 10-5"></path>
                    <path d="M2 12l10 5 10-5"></path>
                </svg>
                <span style="font-weight: 600; font-size: 24px; color: white;">Kpop Pocket</span>
            </div>
            
            <h1 class="hero-headline" style="margin-bottom: 16px; color: white;">Admin <br> Control.</h1>
            <p class="body-text" style="color: rgba(255,255,255,0.85); font-size: 18px;">Manage your next legendary drop.</p>
        </div>
    </div>

    <!-- Right Side: Login Form -->
    <div class="login-right">
        <div class="login-card">
            <h2 class="card-headline" style="margin-bottom: 8px;">Welcome Back</h2>
            <p class="body-text" style="margin-bottom: 32px;">Please enter your admin credentials.</p>

            <form action="{{ route('admin.login.submit') }}" method="POST">
                @csrf
                
                @if($errors->any())
                    <div style="background-color: rgba(255, 77, 109, 0.06); border: 1px solid rgba(255, 77, 109, 0.15); color: var(--danger); padding: 14px 18px; border-radius: 14px; margin-bottom: 24px; font-size: 14px;">
                        {{ $errors->first() }}
                    </div>
                @endif

                <div class="form-group">
                    <label class="form-label">Email Address</label>
                    <input type="email" name="email" class="form-control" placeholder="admin@kpoppocket.com" value="{{ old('email') }}" required>
                </div>

                <div class="form-group">
                    <label class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="••••••••" required>
                </div>

                <div class="form-group" style="display: flex; justify-content: space-between; align-items: center;">
                    <label style="display: flex; align-items: center; gap: 8px; cursor: pointer;">
                        <input type="checkbox" name="remember" class="custom-checkbox">
                        <span class="body-text" style="font-size: 14px;">Remember me</span>
                    </label>
                </div>

                <button type="submit" class="btn-primary" style="width: 100%; margin-top: 16px;">Login to Dashboard</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>
