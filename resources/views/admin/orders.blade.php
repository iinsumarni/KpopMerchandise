@extends('layouts.admin')

@section('title', 'Orders')

@section('content')
<div style="display: flex; justify-content: space-between; align-items: flex-end; margin-bottom: 24px;">
    <div>
        <h1 class="section-title">Orders</h1>
        <p class="body-text" style="margin-top: 8px;">View and manage customer orders and preorders.</p>
    </div>
    <div style="display: flex; gap: 16px;">
        <button class="btn-secondary">Export</button>
    </div>
</div>

<div class="data-table-container">
    <div style="display: flex; gap: 24px; margin-bottom: 24px; border-bottom: 1px solid var(--border-color); padding-bottom: 16px;">
        <span style="color: var(--primary-pink); font-weight: 500; cursor: pointer; border-bottom: 2px solid var(--primary-pink); padding-bottom: 16px; margin-bottom: -17px;">All Orders</span>
        <span style="color: var(--text-muted); font-weight: 500; cursor: pointer;">Preorders</span>
        <span style="color: var(--text-muted); font-weight: 500; cursor: pointer;">Returns</span>
    </div>

    <table class="data-table">
        <thead>
            <tr>
                <th>Order ID</th>
                <th>Date</th>
                <th>Customer</th>
                <th>Payment</th>
                <th>Fulfillment</th>
                <th>Total</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="font-family: monospace; color: var(--text-muted);">#ORD-8921</td>
                <td>May 10, 2026</td>
                <td>Sarah Jenkins</td>
                <td><span class="status-pill paid">Paid</span></td>
                <td><span class="status-pill ready">Unfulfilled</span></td>
                <td>Rp 450.000</td>
                <td>
                    <button class="btn-icon"><span class="material-symbols-outlined" style="font-size: 16px;">visibility</span></button>
                </td>
            </tr>
            <tr>
                <td style="font-family: monospace; color: var(--text-muted);">#ORD-8920</td>
                <td>May 09, 2026</td>
                <td>Aisha Putri</td>
                <td><span class="status-pill paid">Paid</span></td>
                <td><span class="status-pill shipping">Shipping</span></td>
                <td>Rp 850.000</td>
                <td>
                    <button class="btn-icon"><span class="material-symbols-outlined" style="font-size: 16px;">visibility</span></button>
                </td>
            </tr>
            <tr>
                <td style="font-family: monospace; color: var(--text-muted);">#ORD-8919</td>
                <td>May 09, 2026</td>
                <td>Kevin Adiwangsa</td>
                <td><span class="status-pill pending">Pending</span></td>
                <td><span class="status-pill ready">Unfulfilled</span></td>
                <td>Rp 250.000</td>
                <td>
                    <button class="btn-icon"><span class="material-symbols-outlined" style="font-size: 16px;">visibility</span></button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
