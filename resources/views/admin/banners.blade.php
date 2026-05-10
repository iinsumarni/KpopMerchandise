@extends('layouts.admin')

@section('title', 'Banners')

@section('content')
<div style="display: flex; justify-content: space-between; align-items: flex-end; margin-bottom: 24px;">
    <div>
        <h1 class="section-title">Banner Management</h1>
        <p class="body-text" style="margin-top: 8px;">Control the promotional banners displayed on the storefront.</p>
    </div>
    <div style="display: flex; gap: 16px;">
        <button class="btn-primary">+ Create Banner</button>
    </div>
</div>

<div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(400px, 1fr)); gap: 32px; margin-top: 32px;">
    
    <!-- Hero Banner -->
    <div class="metric-card" style="padding: 0; overflow: hidden; position: relative;">
        <div style="height: 200px; background-image: url('https://images.unsplash.com/photo-1611078720138-038753232ea2?auto=format&fit=crop&q=80&w=600'); background-size: cover; background-position: center;"></div>
        <div style="padding: 24px;">
            <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 16px;">
                <div>
                    <h3 style="font-size: 18px; font-weight: 600; margin-bottom: 4px;">Main Hero Promo</h3>
                    <p style="font-size: 14px; color: var(--text-muted);">Position: Homepage Top</p>
                </div>
                <span class="status-pill ready">Active</span>
            </div>
            <div style="display: flex; justify-content: space-between; align-items: center; border-top: 1px solid var(--border-color); padding-top: 16px;">
                <span style="font-size: 13px; color: var(--text-muted);">Valid until: May 30, 2026</span>
                <div style="display: flex; gap: 8px;">
                    <button class="btn-icon"><span class="material-symbols-outlined" style="font-size: 16px;">edit</span></button>
                    <button class="btn-icon" style="color: var(--soft-pink); border-color: rgba(255,133,207,0.3);"><span class="material-symbols-outlined" style="font-size: 16px;">delete</span></button>
                </div>
            </div>
        </div>
    </div>

    <!-- Secondary Promo -->
    <div class="metric-card" style="padding: 0; overflow: hidden; position: relative;">
        <div style="height: 200px; background-image: url('https://images.unsplash.com/photo-1557672172-298e090bd0f1?auto=format&fit=crop&q=80&w=600'); background-size: cover; background-position: center;"></div>
        <div style="padding: 24px;">
            <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 16px;">
                <div>
                    <h3 style="font-size: 18px; font-weight: 600; margin-bottom: 4px;">Summer Merch Sale</h3>
                    <p style="font-size: 14px; color: var(--text-muted);">Position: Shop Sidebar</p>
                </div>
                <span class="status-pill pending">Draft</span>
            </div>
            <div style="display: flex; justify-content: space-between; align-items: center; border-top: 1px solid var(--border-color); padding-top: 16px;">
                <span style="font-size: 13px; color: var(--text-muted);">Starts: June 01, 2026</span>
                <div style="display: flex; gap: 8px;">
                    <button class="btn-icon"><span class="material-symbols-outlined" style="font-size: 16px;">edit</span></button>
                    <button class="btn-icon" style="color: var(--soft-pink); border-color: rgba(255,133,207,0.3);"><span class="material-symbols-outlined" style="font-size: 16px;">delete</span></button>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
