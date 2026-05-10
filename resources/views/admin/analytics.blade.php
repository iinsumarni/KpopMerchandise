@extends('layouts.admin')

@section('title', 'Analytics')

@section('content')
<div style="display: flex; justify-content: space-between; align-items: flex-end; margin-bottom: 24px;">
    <div>
        <h1 class="section-title">Analytics</h1>
        <p class="body-text" style="margin-top: 8px;">Detailed breakdown of your store's performance.</p>
    </div>
    <div style="display: flex; gap: 16px;">
        <select class="form-control" style="width: auto; padding: 10px 16px;">
            <option>Last 30 Days</option>
            <option>Last 3 Months</option>
            <option>This Year</option>
        </select>
        <button class="btn-primary">Download CSV</button>
    </div>
</div>

<div class="analytics-grid">
    <div class="metric-card">
        <div>
            <span class="metric-label">Conversion Rate</span>
            <h3 class="metric-value">4.2%</h3>
        </div>
        <div class="metric-trend">↑ 0.8% this month</div>
    </div>
    
    <div class="metric-card">
        <div>
            <span class="metric-label">Average Order Value</span>
            <h3 class="metric-value">Rp 350K</h3>
        </div>
        <div class="metric-trend" style="color: var(--text-muted);">Stable</div>
    </div>

    <div class="metric-card">
        <div>
            <span class="metric-label">Store Sessions</span>
            <h3 class="metric-value">124K</h3>
        </div>
        <div class="metric-trend">↑ 24% vs last month</div>
    </div>
</div>

<div class="chart-container" style="margin-top: 32px; height: 350px; display: flex; flex-direction: column; justify-content: center; align-items: center;">
    <h3 style="font-size: 18px; font-weight: 500; margin-bottom: 16px; align-self: flex-start;">Traffic Sources</h3>
    <div style="display: flex; gap: 40px; align-items: flex-end; height: 200px; width: 100%; max-width: 600px; padding: 0 20px;">
        <div style="display: flex; flex-direction: column; align-items: center; gap: 8px; flex: 1;">
            <div style="width: 100%; height: 160px; background: var(--primary-pink); border-radius: 8px 8px 0 0; opacity: 0.9;"></div>
            <span style="font-size: 14px; color: var(--text-muted);">Social Media</span>
        </div>
        <div style="display: flex; flex-direction: column; align-items: center; gap: 8px; flex: 1;">
            <div style="width: 100%; height: 80px; background: var(--soft-pink); border-radius: 8px 8px 0 0; opacity: 0.7;"></div>
            <span style="font-size: 14px; color: var(--text-muted);">Direct</span>
        </div>
        <div style="display: flex; flex-direction: column; align-items: center; gap: 8px; flex: 1;">
            <div style="width: 100%; height: 120px; background: var(--primary-pink); border-radius: 8px 8px 0 0; opacity: 0.5;"></div>
            <span style="font-size: 14px; color: var(--text-muted);">Organic Search</span>
        </div>
        <div style="display: flex; flex-direction: column; align-items: center; gap: 8px; flex: 1;">
            <div style="width: 100%; height: 40px; background: var(--soft-pink); border-radius: 8px 8px 0 0; opacity: 0.4;"></div>
            <span style="font-size: 14px; color: var(--text-muted);">Referral</span>
        </div>
    </div>
</div>
@endsection
