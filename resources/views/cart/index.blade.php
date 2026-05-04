<h1>Cart Page</h1>

@if($cartItems->count())

    @php $total = 0; @endphp

    @foreach($cartItems as $item)
        <div style="margin-bottom: 20px; border-bottom:1px solid #ccc; padding-bottom:10px;">

            <!-- nama produk -->
            <h3>{{ $item->product->name ?? 'Produk tidak ditemukan' }}</h3>

            <!-- harga -->
            <p>Harga: Rp {{ $item->product->price ?? 0 }}</p>

            <!-- kontrol -->
            <div style="display: flex; align-items: center; gap: 10px;">
                
                <!-- kurang -->
                <a href="/cart/decrease/{{ $item->id }}">➖</a>

                <!-- quantity -->
                <span>{{ $item->quantity }}</span>

                <!-- tambah -->
                <a href="/cart/increase/{{ $item->id }}">➕</a>

                <!-- hapus -->
                <a href="/cart/remove/{{ $item->id }}" style="color:red;">Hapus</a>

            </div>

        </div>

        @php
            $price = $item->product->price ?? 0;
            $total += $price * $item->quantity;
        @endphp

    @endforeach

    <hr>

    <h2>Total: Rp {{ $total }}</h2>

    <br><br>

    <!-- tombol checkout -->
    <a href="/cart/checkout" style="background: green; color: white; padding: 10px;">
        Checkout
    </a>

@else
    <p>Cart kosong</p>
@endif