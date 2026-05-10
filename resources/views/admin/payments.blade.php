@extends('layouts.admin')

@section('title', 'Payments')

@section('content')
<div style="display: flex; justify-content: space-between; align-items: flex-end; margin-bottom: 24px;">
    <div>
        <h1 class="section-title">Transactions</h1>
        <p class="body-text" style="margin-top: 8px;">View payment history and manage refunds.</p>
    </div>
    <div style="display: flex; gap: 16px;">
        <button class="btn-secondary">Export Log</button>
    </div>
</div>

<div class="data-table-container">
    <table class="data-table">
        <thead>
            <tr>
                <th>Transaction ID</th>
                <th>Order Ref</th>
                <th>Method</th>
                <th>Date & Time</th>
                <th>Amount</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="font-family: monospace; color: var(--text-muted);">TRX-9982312A</td>
                <td style="font-family: monospace;">#ORD-8921</td>
                <td>Credit Card (Visa)</td>
                <td>May 10, 14:30</td>
                <td style="font-weight: 500;">Rp 450.000</td>
                <td><span class="status-pill paid">Success</span></td>
                <td>
                    <button class="btn-icon"><span class="material-symbols-outlined" style="font-size: 16px;">receipt_long</span></button>
                </td>
            </tr>
            <tr>
                <td style="font-family: monospace; color: var(--text-muted);">TRX-9982311B</td>
                <td style="font-family: monospace;">#ORD-8920</td>
                <td>Bank Transfer (BCA)</td>
                <td>May 09, 09:15</td>
                <td style="font-weight: 500;">Rp 850.000</td>
                <td><span class="status-pill paid">Success</span></td>
                <td>
                    <button class="btn-icon"><span class="material-symbols-outlined" style="font-size: 16px;">receipt_long</span></button>
                </td>
            </tr>
            <tr>
                <td style="font-family: monospace; color: var(--text-muted);">TRX-9982310C</td>
                <td style="font-family: monospace;">#ORD-8919</td>
                <td>E-Wallet (GoPay)</td>
                <td>May 09, 08:45</td>
                <td style="font-weight: 500;">Rp 250.000</td>
                <td><span class="status-pill pending">Pending</span></td>
                <td>
                    <button class="btn-icon"><span class="material-symbols-outlined" style="font-size: 16px;">receipt_long</span></button>
                </td>
            </tr>
            <tr>
                <td style="font-family: monospace; color: var(--text-muted);">TRX-9982309D</td>
                <td style="font-family: monospace;">#ORD-8910</td>
                <td>Credit Card (Mastercard)</td>
                <td>May 08, 16:20</td>
                <td style="font-weight: 500; color: var(--text-muted); text-decoration: line-through;">Rp 300.000</td>
                <td><span class="status-pill sold-out">Refunded</span></td>
                <td>
                    <button class="btn-icon"><span class="material-symbols-outlined" style="font-size: 16px;">receipt_long</span></button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
