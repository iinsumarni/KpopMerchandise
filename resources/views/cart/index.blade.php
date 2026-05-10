<x-app-layout>
    <x-slot name="header">
        <h2 style="font-size: 32px; font-weight: 700; letter-spacing: -0.02em; color: #121217;">Shopping Cart</h2>
    </x-slot>

    <div class="max-w-4xl mx-auto px-6">
        @if($cartItems->count())
            @php $total = 0; @endphp

            <div class="flex flex-col gap-4">
                @foreach($cartItems as $item)
                    <div style="background: #FFFFFF; border: 1px solid #E9DDE5; border-radius: 20px; padding: 24px; box-shadow: 0 4px 24px rgba(0,0,0,0.04); transition: all 0.3s;" onmouseenter="this.style.boxShadow='0 10px 40px rgba(255,46,147,0.08)'; this.style.borderColor='rgba(255,46,147,0.15)'" onmouseleave="this.style.boxShadow='0 4px 24px rgba(0,0,0,0.04)'; this.style.borderColor='#E9DDE5'">
                        <div style="display: flex; align-items: center; justify-content: space-between; gap: 20px;">
                            <div style="flex: 1;">
                                <h3 style="font-size: 17px; font-weight: 600; color: #121217; margin-bottom: 4px;">{{ $item->product->name ?? 'Produk tidak ditemukan' }}</h3>
                                <p style="font-size: 14px; color: #5B5B65;">Rp {{ number_format($item->product->price ?? 0, 0, ',', '.') }}</p>
                            </div>

                            <div style="display: flex; align-items: center; gap: 16px;">
                                <a href="/cart/decrease/{{ $item->id }}" style="width: 36px; height: 36px; border-radius: 10px; border: 1.5px solid #E9DDE5; display: flex; align-items: center; justify-content: center; text-decoration: none; color: #5B5B65; font-size: 18px; transition: all 0.2s;" onmouseenter="this.style.borderColor='#FF2E93'; this.style.color='#FF2E93'" onmouseleave="this.style.borderColor='#E9DDE5'; this.style.color='#5B5B65'">−</a>
                                <span style="font-size: 16px; font-weight: 600; color: #121217; min-width: 24px; text-align: center;">{{ $item->quantity }}</span>
                                <a href="/cart/increase/{{ $item->id }}" style="width: 36px; height: 36px; border-radius: 10px; border: 1.5px solid #E9DDE5; display: flex; align-items: center; justify-content: center; text-decoration: none; color: #5B5B65; font-size: 18px; transition: all 0.2s;" onmouseenter="this.style.borderColor='#FF2E93'; this.style.color='#FF2E93'" onmouseleave="this.style.borderColor='#E9DDE5'; this.style.color='#5B5B65'">+</a>
                            </div>

                            <div style="text-align: right; min-width: 120px;">
                                <p style="font-size: 17px; font-weight: 700; color: #FF2E93;">Rp {{ number_format(($item->product->price ?? 0) * $item->quantity, 0, ',', '.') }}</p>
                            </div>

                            <a href="/cart/remove/{{ $item->id }}" style="width: 36px; height: 36px; border-radius: 10px; display: flex; align-items: center; justify-content: center; text-decoration: none; color: #FF4D6D; transition: all 0.2s; background: rgba(255,77,109,0.06);" onmouseenter="this.style.background='rgba(255,77,109,0.12)'" onmouseleave="this.style.background='rgba(255,77,109,0.06)'">✕</a>
                        </div>
                    </div>
                    @php
                        $price = $item->product->price ?? 0;
                        $total += $price * $item->quantity;
                    @endphp
                @endforeach
            </div>

            <!-- Total & Checkout -->
            <div style="margin-top: 32px; background: #FFFFFF; border: 1px solid #E9DDE5; border-radius: 24px; padding: 32px; box-shadow: 0 10px 40px rgba(255,46,147,0.06);">
                <div style="display: flex; justify-content: space-between; align-items: center;">
                    <div>
                        <p style="font-size: 14px; color: #5B5B65; margin-bottom: 4px;">Order Total</p>
                        <p style="font-size: 32px; font-weight: 300; letter-spacing: -0.03em; color: #121217;">Rp {{ number_format($total, 0, ',', '.') }}</p>
                    </div>
                    <a href="/cart/checkout" style="display: inline-flex; align-items: center; justify-content: center; padding: 16px 40px; border-radius: 9999px; background: linear-gradient(135deg, #FF2E93, #FF5DB1); color: white; font-size: 14px; font-weight: 700; text-decoration: none; letter-spacing: 0.04em; text-transform: uppercase; box-shadow: 0 4px 20px rgba(255,46,147,0.25); transition: transform 0.3s, box-shadow 0.3s;" onmouseenter="this.style.transform='scale(1.02)'; this.style.boxShadow='0 8px 30px rgba(255,46,147,0.3)'" onmouseleave="this.style.transform='scale(1)'; this.style.boxShadow='0 4px 20px rgba(255,46,147,0.25)'">
                        Checkout →
                    </a>
                </div>
            </div>

        @else
            <div style="text-align: center; padding: 80px 20px;">
                <div style="font-size: 64px; margin-bottom: 16px;">🛒</div>
                <h3 style="font-size: 24px; font-weight: 600; color: #121217; margin-bottom: 8px;">Your cart is empty</h3>
                <p style="font-size: 15px; color: #5B5B65; margin-bottom: 24px;">Start shopping to add items to your cart.</p>
                <a href="/" style="display: inline-flex; align-items: center; padding: 14px 32px; border-radius: 9999px; background: linear-gradient(135deg, #FF2E93, #FF5DB1); color: white; font-size: 14px; font-weight: 600; text-decoration: none; box-shadow: 0 4px 16px rgba(255,46,147,0.2);">Browse Collections</a>
            </div>
        @endif
    </div>
</x-app-layout>