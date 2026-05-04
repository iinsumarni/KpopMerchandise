<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto flex flex-col gap-6">
        <div class="glass-card holo-glow rounded-3xl p-6 text-white border border-white/10 shadow-[0_20px_60px_-15px_rgba(255,79,163,0.1)]">
            <h3 class="font-h3 text-h3 text-white mb-6">Produk</h3>

            <!-- TEST PRODUK -->
            <div class="bg-surface-container/50 border border-white/10 p-6 rounded-2xl mb-6 hover:bg-white/5 transition-all duration-300">
                <h4 class="font-body-lg font-bold text-white mb-1">Album BTS</h4>
                <p class="text-on-surface-variant text-sm mb-4">Harga: Rp 100.000</p>

                <a href="/cart/add/1"
                   class="inline-block bg-gradient-to-r from-primary-container to-secondary-container text-white font-label-caps text-label-caps px-6 py-3 rounded-full hover:scale-105 transition-transform shadow-[0_8px_32px_rgba(255,79,163,0.3)]">
                   + Add to Cart
                </a>
            </div>

            <!-- INFO -->
            <div class="mt-6 p-4 rounded-xl bg-tertiary-container/20 border border-tertiary-fixed/30 flex items-center gap-3">
                <span class="material-symbols-outlined text-tertiary-fixed">check_circle</span>
                <p class="text-tertiary-fixed font-bold text-sm tracking-wide">
                    {{ __("You're logged in!") }}
                </p>
            </div>
        </div>
    </div>
</x-app-layout>