@extends('layouts.admin')

@section('title', 'Inventory')

@section('content')
<div style="display: flex; justify-content: space-between; align-items: flex-end; margin-bottom: 24px;">
    <div>
        <h1 class="section-title">Inventory Control</h1>
        <p class="body-text" style="margin-top: 8px;">Monitor stock levels and manage incoming shipments.</p>
    </div>
    <div style="display: flex; gap: 16px;">
        <button class="btn-primary">Record Shipment</button>
    </div>
</div>

<div class="data-table-container">
    <table class="data-table">
        <thead>
            <tr>
                <th>SKU</th>
                <th>Product Name</th>
                <th>Warehouse</th>
                <th>On Hand</th>
                <th>Incoming</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="font-family: monospace; color: var(--text-muted);">SKU-ALB-MNS-A</td>
                <td style="font-weight: 500;">Midnight Sun EP - Ver. A</td>
                <td>Jakarta Central</td>
                <td>124</td>
                <td style="color: var(--text-muted);">0</td>
                <td><span class="status-pill ready">In Stock</span></td>
                <td>
                    <button class="btn-icon"><span class="material-symbols-outlined" style="font-size: 16px;">edit</span></button>
                </td>
            </tr>
            <tr>
                <td style="font-family: monospace; color: var(--text-muted);">SKU-LS-V2</td>
                <td style="font-weight: 500;">Official Lightstick V2</td>
                <td>Jakarta Central</td>
                <td style="color: var(--soft-pink); font-weight: bold;">0</td>
                <td><span style="color: var(--text-muted);">500 (ETA: May 15)</span></td>
                <td><span class="status-pill sold-out">Out of Stock</span></td>
                <td>
                    <button class="btn-icon"><span class="material-symbols-outlined" style="font-size: 16px;">edit</span></button>
                </td>
            </tr>
            <tr>
                <td style="font-family: monospace; color: var(--text-muted);">SKU-PC-HOLO-4</td>
                <td style="font-weight: 500;">Holographic PC Set Vol.4</td>
                <td>Bandung Hub</td>
                <td style="color: var(--primary-pink); font-weight: bold;">12</td>
                <td style="color: var(--text-muted);">100 (ETA: May 12)</td>
                <td><span class="status-pill pending">Low Stock</span></td>
                <td>
                    <button class="btn-icon"><span class="material-symbols-outlined" style="font-size: 16px;">edit</span></button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
