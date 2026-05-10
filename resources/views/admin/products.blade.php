@extends('layouts.admin')

@section('title', 'Products')

@section('content')
<div style="display: flex; justify-content: space-between; align-items: flex-end; margin-bottom: 24px;">
    <div>
        <h1 class="section-title">Products</h1>
        <p class="body-text" style="margin-top: 8px;">Manage your K-pop merchandise inventory.</p>
    </div>
    <div style="display: flex; gap: 16px;">
        <button class="btn-primary">Add Product</button>
    </div>
</div>

<div class="data-table-container">
    <table class="data-table">
        <thead>
            <tr>
                <th>Image</th>
                <th>Product Name</th>
                <th>Category</th>
                <th>Price</th>
                <th>Stock</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><img src="https://images.unsplash.com/photo-1611078720138-038753232ea2?auto=format&fit=crop&q=80&w=60" alt="Album" style="width: 40px; height: 40px; border-radius: 8px; object-fit: cover;"></td>
                <td>Midnight Sun EP (Holo Ver.)</td>
                <td>Album</td>
                <td>Rp 450.000</td>
                <td>124</td>
                <td><span class="status-pill ready">Active</span></td>
                <td>
                    <button class="btn-icon"><span class="material-symbols-outlined" style="font-size: 16px;">edit</span></button>
                </td>
            </tr>
            <tr>
                <td><img src="https://images.unsplash.com/photo-1557672172-298e090bd0f1?auto=format&fit=crop&q=80&w=60" alt="Poster" style="width: 40px; height: 40px; border-radius: 8px; object-fit: cover;"></td>
                <td>Tour Poster Set - Limited</td>
                <td>Merch</td>
                <td>Rp 150.000</td>
                <td>45</td>
                <td><span class="status-pill ready">Active</span></td>
                <td>
                    <button class="btn-icon"><span class="material-symbols-outlined" style="font-size: 16px;">edit</span></button>
                </td>
            </tr>
            <tr>
                <td><img src="https://images.unsplash.com/photo-1542204165-65bf26472b9b?auto=format&fit=crop&q=80&w=60" alt="Lightstick" style="width: 40px; height: 40px; border-radius: 8px; object-fit: cover;"></td>
                <td>Official Lightstick V2</td>
                <td>Lightstick</td>
                <td>Rp 850.000</td>
                <td>0</td>
                <td><span class="status-pill sold-out">Sold Out</span></td>
                <td>
                    <button class="btn-icon"><span class="material-symbols-outlined" style="font-size: 16px;">edit</span></button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
