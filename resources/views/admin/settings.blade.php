@extends('layouts.admin')

@section('title', 'Settings')

@section('content')
<div style="display: flex; justify-content: space-between; align-items: flex-end; margin-bottom: 24px;">
    <div>
        <h1 class="section-title">Settings</h1>
        <p class="body-text" style="margin-top: 8px;">Manage your store configuration and admin profile.</p>
    </div>
    <div style="display: flex; gap: 16px;">
        <button class="btn-primary">Save Changes</button>
    </div>
</div>

<div style="display: grid; grid-template-columns: 1fr 2fr; gap: 32px; margin-top: 32px;">
    
    <!-- Sidebar Navigation for Settings -->
    <div style="display: flex; flex-direction: column; gap: 8px;">
        <a href="#" class="sidebar-item active" style="margin: 0; justify-content: flex-start; background-color: var(--hover-bg); color: var(--text-main);">
            <span class="material-symbols-outlined" style="font-size: 20px;">person</span>
            Profile Info
        </a>
        <a href="#" class="sidebar-item" style="margin: 0; justify-content: flex-start;">
            <span class="material-symbols-outlined" style="font-size: 20px;">storefront</span>
            Store Details
        </a>
        <a href="#" class="sidebar-item" style="margin: 0; justify-content: flex-start;">
            <span class="material-symbols-outlined" style="font-size: 20px;">payments</span>
            Payment Methods
        </a>
        <a href="#" class="sidebar-item" style="margin: 0; justify-content: flex-start;">
            <span class="material-symbols-outlined" style="font-size: 20px;">lock</span>
            Security
        </a>
    </div>

    <!-- Settings Form -->
    <div class="metric-card" style="padding: 40px;">
        <h3 style="font-size: 20px; font-weight: 600; margin-bottom: 24px;">Profile Information</h3>
        
        <div style="display: flex; align-items: center; gap: 24px; margin-bottom: 32px;">
            <div class="profile-avatar" style="width: 80px; height: 80px; border-radius: 40px;">
                <img src="https://i.pravatar.cc/150?img=5" alt="Admin">
            </div>
            <div>
                <button class="btn-secondary" style="height: 36px; padding: 0 16px; font-size: 14px;">Change Avatar</button>
                <p style="font-size: 13px; color: var(--text-muted); margin-top: 8px;">JPG, GIF or PNG. Max size of 2MB</p>
            </div>
        </div>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 24px;">
            <div class="form-group">
                <label class="form-label">Full Name</label>
                <input type="text" class="form-control" value="Admin Kpop Pocket">
            </div>
            <div class="form-group">
                <label class="form-label">Email Address</label>
                <input type="email" class="form-control" value="admin@kpoppocket.com">
            </div>
            <div class="form-group" style="grid-column: span 2;">
                <label class="form-label">Role</label>
                <input type="text" class="form-control" value="Super Administrator" disabled style="opacity: 0.7; cursor: not-allowed;">
            </div>
            <div class="form-group" style="grid-column: span 2;">
                <label class="form-label">Bio / Notes</label>
                <textarea class="form-control" rows="4">Managing the best K-pop merchandise store.</textarea>
            </div>
        </div>

    </div>

</div>
@endsection
