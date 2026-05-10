@extends('layouts.admin')

@section('title', 'Customers')

@section('content')
<div style="display: flex; justify-content: space-between; align-items: flex-end; margin-bottom: 24px;">
    <div>
        <h1 class="section-title">Customers</h1>
        <p class="body-text" style="margin-top: 8px;">View customer details and purchase history.</p>
    </div>
    <div style="display: flex; gap: 16px;">
        <button class="btn-secondary">Export Customers</button>
    </div>
</div>

<div class="data-table-container">
    <table class="data-table">
        <thead>
            <tr>
                <th>Customer Name</th>
                <th>Email</th>
                <th>Location</th>
                <th>Orders</th>
                <th>Total Spent</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <div style="display: flex; align-items: center; gap: 12px;">
                        <img src="https://i.pravatar.cc/100?img=1" alt="Avatar" style="width: 32px; height: 32px; border-radius: 16px;">
                        <span style="font-weight: 500;">Sarah Jenkins</span>
                    </div>
                </td>
                <td style="color: var(--text-muted);">sarah.j@example.com</td>
                <td>Jakarta, ID</td>
                <td>12</td>
                <td style="font-weight: 500;">Rp 4.500.000</td>
                <td>
                    <button class="btn-icon"><span class="material-symbols-outlined" style="font-size: 16px;">visibility</span></button>
                </td>
            </tr>
            <tr>
                <td>
                    <div style="display: flex; align-items: center; gap: 12px;">
                        <img src="https://i.pravatar.cc/100?img=5" alt="Avatar" style="width: 32px; height: 32px; border-radius: 16px;">
                        <span style="font-weight: 500;">Aisha Putri</span>
                    </div>
                </td>
                <td style="color: var(--text-muted);">aisha.p@example.com</td>
                <td>Bandung, ID</td>
                <td>3</td>
                <td style="font-weight: 500;">Rp 850.000</td>
                <td>
                    <button class="btn-icon"><span class="material-symbols-outlined" style="font-size: 16px;">visibility</span></button>
                </td>
            </tr>
            <tr>
                <td>
                    <div style="display: flex; align-items: center; gap: 12px;">
                        <img src="https://i.pravatar.cc/100?img=9" alt="Avatar" style="width: 32px; height: 32px; border-radius: 16px;">
                        <span style="font-weight: 500;">Kevin Adiwangsa</span>
                    </div>
                </td>
                <td style="color: var(--text-muted);">kevin.adi@example.com</td>
                <td>Surabaya, ID</td>
                <td>1</td>
                <td style="font-weight: 500;">Rp 250.000</td>
                <td>
                    <button class="btn-icon"><span class="material-symbols-outlined" style="font-size: 16px;">visibility</span></button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
