@extends('layouts.admin')

@section('title', 'Overview')

@section('content')
    <div style="display: flex; justify-content: space-between; align-items: flex-end; margin-bottom: 28px;">
        <div>
            <h1 class="section-title">Dashboard Overview</h1>
            <p class="body-text" style="margin-top: 8px;">Monitor your drops, sales, and analytics in real-time.</p>
        </div>
        <div style="display: flex; gap: 12px;">
            <button class="btn-secondary">Export Report</button>
            <button class="btn-primary">Manage Drop</button>
        </div>
    </div>

    <!-- Analytics Cards -->
    <div class="analytics-grid">
        <div class="metric-card">
            <div>
                <span class="metric-label">Total Revenue</span>
                <h3 class="metric-value">Rp 1.2B</h3>
            </div>
            <div class="metric-trend">↑ 18.5% this month</div>
        </div>
        
        <div class="metric-card">
            <div>
                <span class="metric-label">Total Orders</span>
                <h3 class="metric-value">3,492</h3>
            </div>
            <div class="metric-trend" style="color: var(--text-muted);">↑ 4.2% vs last month</div>
        </div>

        <div class="metric-card">
            <div>
                <span class="metric-label">Active Users</span>
                <h3 class="metric-value">14.2K</h3>
            </div>
            <div class="metric-trend">↑ 12.1% engagement</div>
        </div>

        <div class="metric-card">
            <div>
                <span class="metric-label">Sold Out Rate</span>
                <h3 class="metric-value">94.8%</h3>
            </div>
            <div class="metric-trend" style="color: var(--text-muted);">across 12 drops</div>
        </div>
    </div>

    <!-- Sales Chart -->
    <div class="chart-container">
        <h3 style="font-size: 16px; font-weight: 600; margin-bottom: 24px; color: var(--text-main);">Monthly Sales & Preorder Growth</h3>
        <canvas id="salesChart"></canvas>
    </div>

    <!-- Order Management Table Preview -->
    <div style="margin-top: 28px;">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px;">
            <h3 style="font-size: 16px; font-weight: 600; color: var(--text-main);">Recent Transactions</h3>
            <a href="#" style="color: var(--primary-pink); text-decoration: none; font-size: 13px; font-weight: 600; display: flex; align-items: center; gap: 4px;">View All Orders <span style="font-size: 16px;">→</span></a>
        </div>
        
        <div class="data-table-container" style="margin-top: 0;">
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Customer</th>
                        <th>Product</th>
                        <th>Total</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="font-family: 'SF Mono', monospace; color: var(--text-muted); font-size: 13px;">#ORD-8921</td>
                        <td>
                            <div style="display: flex; align-items: center; gap: 12px;">
                                <img src="https://i.pravatar.cc/100?img=1" alt="Avatar" style="width: 32px; height: 32px; border-radius: 10px; object-fit: cover;">
                                <span style="font-weight: 500;">Sarah Jenkins</span>
                            </div>
                        </td>
                        <td>Midnight Sun - Ver. A</td>
                        <td style="font-weight: 600;">Rp 450.000</td>
                        <td><span class="status-pill paid">Paid</span></td>
                    </tr>
                    <tr>
                        <td style="font-family: 'SF Mono', monospace; color: var(--text-muted); font-size: 13px;">#ORD-8920</td>
                        <td>
                            <div style="display: flex; align-items: center; gap: 12px;">
                                <img src="https://i.pravatar.cc/100?img=5" alt="Avatar" style="width: 32px; height: 32px; border-radius: 10px; object-fit: cover;">
                                <span style="font-weight: 500;">Aisha Putri</span>
                            </div>
                        </td>
                        <td>Official Lightstick V2</td>
                        <td style="font-weight: 600;">Rp 850.000</td>
                        <td><span class="status-pill shipping">Shipping</span></td>
                    </tr>
                    <tr>
                        <td style="font-family: 'SF Mono', monospace; color: var(--text-muted); font-size: 13px;">#ORD-8919</td>
                        <td>
                            <div style="display: flex; align-items: center; gap: 12px;">
                                <img src="https://i.pravatar.cc/100?img=9" alt="Avatar" style="width: 32px; height: 32px; border-radius: 10px; object-fit: cover;">
                                <span style="font-weight: 500;">Kevin Adiwangsa</span>
                            </div>
                        </td>
                        <td>Holographic PC Set</td>
                        <td style="font-weight: 600;">Rp 250.000</td>
                        <td><span class="status-pill pending">Pending</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection

@push('scripts')
<script>
document.addEventListener("DOMContentLoaded", function() {
    const ctx = document.getElementById('salesChart').getContext('2d');
    
    // Light mode gradient
    let gradient = ctx.createLinearGradient(0, 0, 0, 400);
    gradient.addColorStop(0, 'rgba(255, 46, 147, 0.15)');
    gradient.addColorStop(1, 'rgba(255, 46, 147, 0.0)');

    new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
            datasets: [{
                label: 'Monthly Sales',
                data: [650, 890, 750, 1200, 1450, 1100, 1900],
                borderColor: '#FF2E93',
                backgroundColor: gradient,
                borderWidth: 2.5,
                tension: 0.4,
                fill: true,
                pointBackgroundColor: '#FFFFFF',
                pointBorderColor: '#FF2E93',
                pointBorderWidth: 2,
                pointRadius: 5,
                pointHoverRadius: 7,
                pointHoverBackgroundColor: '#FF2E93',
                pointHoverBorderColor: '#FFFFFF',
                pointHoverBorderWidth: 3
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false
                },
                tooltip: {
                    backgroundColor: '#FFFFFF',
                    titleColor: '#121217',
                    bodyColor: '#5B5B65',
                    borderColor: '#E9DDE5',
                    borderWidth: 1,
                    padding: 14,
                    cornerRadius: 12,
                    displayColors: false,
                    titleFont: { family: 'Inter', weight: '600' },
                    bodyFont: { family: 'Inter' },
                    boxShadow: '0 10px 40px rgba(0,0,0,0.08)',
                    callbacks: {
                        label: function(context) {
                            return 'Rp ' + context.parsed.y + 'M';
                        }
                    }
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    grid: {
                        color: 'rgba(233, 221, 229, 0.5)',
                        drawBorder: false
                    },
                    ticks: {
                        color: '#5B5B65',
                        font: {
                            family: 'Inter',
                            size: 12
                        }
                    }
                },
                x: {
                    grid: {
                        display: false,
                        drawBorder: false
                    },
                    ticks: {
                        color: '#5B5B65',
                        font: {
                            family: 'Inter',
                            size: 12,
                            weight: '500'
                        }
                    }
                }
            }
        }
    });
});
</script>
@endpush
